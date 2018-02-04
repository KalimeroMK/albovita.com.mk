<?php

function clean($title)
{
    $chrs = "1234567890._ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $len = strlen($title);
    $cleaned = "";
    for ($i = 0; $i < $len; $i++) {
        $c = substr($title, $i, 1);
        if (!is_int(strpos($chrs, $c)))
            $c = "-";
        $cleaned .= $c;
    }
    $cleaned = strtolower($cleaned);
    $cleaned = trim($cleaned, "-");
    return $cleaned;
}

function truncate($text, $length = 100, $ending = '...', $exact = true, $considerHtml = false)
{
    if ($considerHtml) {
///proveruva dali tekstot e pomal od zadadena vrednost/////////
        if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
            return $text;
        }

        // trga html tagovi
        preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);

        $total_length = strlen($ending);
        $open_tags = array();
        $truncate = '';

        foreach ($lines as $line_matchings) {
            // if there is any html-tag in this line, handle it and add it (uncounted) to the output
            if (!empty($line_matchings[1])) {
                // if it's an "empty element" with or without xhtml-conform closing slash (f.e. <br/>)
                if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
                    // do nothing
                    // if tag is a closing tag (f.e. </b>)
                } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
                    // delete tag from $open_tags list
                    $pos = array_search($tag_matchings[1], $open_tags);
                    if ($pos !== false) {
                        unset($open_tags[$pos]);
                    }
                    // if tag is an opening tag (f.e. <b>)
                } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
                    // add tag to the beginning of $open_tags list
                    array_unshift($open_tags, strtolower($tag_matchings[1]));
                }
                // dodadi html tagovi
                $truncate .= $line_matchings[1];
            }

            // broi karakteri
            $content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
            if ($total_length + $content_length > $length) {
                // kolku karakteri ostanuvaat 
                $left = $length - $total_length;
                $entities_length = 0;
                // bara html elementi
                if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
                    // broi vistinska dolzina 
                    foreach ($entities[0] as $entity) {
                        if ($entity[1] + 1 - $entities_length <= $left) {
                            $left--;
                            $entities_length += strlen($entity[0]);
                        } else {
                            // nema vise karakteri
                            break;
                        }
                    }
                }
                $truncate .= substr($line_matchings[2], 0, $left + $entities_length);
                // maksimun vrednosti dostignata iskoci od loop
                break;
            } else {
                $truncate .= $line_matchings[2];
                $total_length += $content_length;
            }

            // ako e dostignata vrednosta iskoci od loop
            if ($total_length >= $length) {
                break;
            }
        }
    } else {
        if (strlen($text) <= $length) {
            return $text;
        } else {
            $truncate = substr($text, 0, $length - strlen($ending));
        }
    }

    // ne go deli zborot na pola
    if (!$exact) {
        // prazni mesta
        $spacepos = strrpos($truncate, ' ');
        if (isset($spacepos)) {
            // ...krati teks 
            $truncate = substr($truncate, 0, $spacepos);
        }
    }

    // dodadi definiran zavrsetok 
    $truncate .= $ending;

    if ($considerHtml) {
        // povikaj nezatvoreni tagovi
        foreach ($open_tags as $tag) {
            $truncate .= '</' . $tag . '>';
        }
    }

    return $truncate;
}

?>