<?php
    class PageController extends Controller {
        public function index($seo_url) {
            $page = PageModel::getBySeoUrl($seo_url);
            
            if (!$page) {
                Misc::redirect('page/404');
            }
            
            $this->set('seo_title', $page->seo_title);
            $this->set('page', $page);
        }
    }
