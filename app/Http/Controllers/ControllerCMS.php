<?php

namespace App\Http\Controllers;

use App\Page;

class ControllerCMS extends Controller
{

    /* public function run(){
         $content = new PageEnglish();
         $content->url = "animal";
         $content->caption = "Everything About Animal";
         $content->intro = "Animals (also referred to as metazoa)";
         $content->content = "Animals (also referred to as metazoa) are multicellular eukaryotic organisms that form the biological kingdom Animalia. With few exceptions, animals consume organic material, breathe oxygen, are able to move, can reproduce sexually, and grow from a hollow sphere of cells, the blastula, during embryonic development. Over 1.5 million living animal species have been described—of which around 1 million are insects—but it has been estimated there are over 7 million animal species in total. Animals range in length from 8.5 millionths of a metre to 33.6 metres (110 ft). They have complex interactions with each other and their environments, forming intricate food webs. The kingdom Animalia includes humans, but in colloquial use the term animal often refers only to non-human animals. The scientific study of animals is known as zoology.";
         $content->save();
     }*/

    public function getContent($url)
    {
        $page = new Page();
        return $page->render($url);
    }

    public function getEnglishContent($url)
    {
        $page = new Page();
        return $page->renderEngContent($url);
    }
}
