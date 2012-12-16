<div class="layout grid-s5m0">
    <div class="full-banner">
      <?php 
            $banner_modules = array(
                array('id'=> 'shop_menu',domId=>"index-100")
                );

            echo include_modules('banner-modules', $banner_modules);
      ?>
    </div>
   
    <div class="col-main">
        <div class="main-wrap J_TRegion jinjianfeng">

            <?php

            $main_modules = array( 
                array('shortname' => 'shop.picRound', 'version' => '1.0-common', domId => "index-01"),
                 array('shortname' => 'shop.manualSpread', 'version' => '1.0-wangpu', domId => "index-02"),
                array('shortname' => 'shop.searchInShop', 'version' => '1.0-common', domId => "index-03"),
                 array('shortname' => 'shop.itemRecommend', 'version' => '1.0-wangpu', domId => "index-04"),
                array('shortname' => 'shop.flashBanner', 'version' => '1.0-common', domId => "index-05"),
                array('shortname' => 'shop.forumShow', 'version' => '1.0-common', domId => "index-06"),
                );

            echo include_modules('main-modules', $main_modules);

            ?>

        </div>
    </div>

    <div class="col-sub J_TRegion jinjianfeng-sub">

        <?php

        $sub_modules = array(
            array('id' => 'side_sales', domId => "index-300"), // �Զ���ģ��
            array('shortname' => 'shop.itemCategory', 'version' => '1.0-common', domId => "index-101"),
            array('shortname' => 'shop.fileList', 'version' => '1.0-common', domId => "index-104"),
            array('shortname' => 'shop.searchInShop', 'version' => '1.0-common', domId => "index-105"),
            array('id' => 'side_help', domId => "index-301"), // �Զ���ģ��
            array('shortname' => 'shop.topList', 'version' => '1.0-common', domId => "index-106"),
            array('shortname' => 'shop.friendLink', 'version' => '1.0-common', domId => "index-107")
        );

        echo include_modules('sub-modules', $sub_modules);

        ?>

    </div>
</div>