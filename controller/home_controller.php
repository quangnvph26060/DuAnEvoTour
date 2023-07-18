<?php
    function home(){
        $tour_cheap = show_tour_cheap();
        $tour_sale = show_tour_sale();
        $all_tour = show_all_tour();
        $news_like = show_news_like();
        // $sale=show_tour_luot_xem();
        $list =  listkhoihanh();
        $luotxem =  show_tour_luot_xem();
       $show_rand =  tour_rand();
        render('home',['tour_cheap' => $tour_cheap,'tour_sale' => $tour_sale,'all_tour' => $all_tour
        , 'news_like' => $news_like, 'list' => $list, 'luotxem'=>$luotxem,'show_rand'=>$show_rand
        // 'sale' => $sale
    ]);
    }
    function home_admin() {
        render('admin/index');
    }

    function asc_az_ctr(){
        $asc =  asc();
        render('tourDL_az',['asc'=>$asc]);
    }
    
    function desc_za_ctr(){
        $desc =  desc();
        render('tourDL_za',['desc'=>$desc]);
    }
    
    function ascprice_ctr(){
        $asc =  asc_price();
        render('tourDL_price_as',['asc'=>$asc]);
    }
    function descprice_ctr(){
        $desc =  desc_price();
        render('tourDL_price_desc',['desc'=>$desc]);
    }