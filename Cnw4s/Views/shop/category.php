<!--Sidebar-->
<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
    <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
    <div class="sidebar_tags">
        <!--Categories-->
        <div class="sidebar_widget categories filter-widget">
              <h2 class="h2 heading-font">CATEGORIES</h2>
              <div class="widget-content">
                  <ul class="sidebar_categories">
                    <?php    $i = 1; foreach ($data_chitietDM as $row) { ?>
                      <li class="level1 sub-level"><a href="#;" class="site-nav"><?= $data_danhmuc[$i-1]['TenDM'] ?></a>
                        <ul class="sublinks">
                          <?php foreach ($row as $value) { ?>
                            <li class="level2"><a href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>" class="site-nav"><?= $value['TenLSP'] ?></a></li>
                            <?php } ?>
                          </ul>
                      </li>
                      <?php $i++;
                    } ?>
                  </ul>
              </div>
          </div>

          <!--Popular Products-->
<div class="sidebar_widget">
         
<div class="widget-content">
                  <div class="list list-sidebar-products">
                    <div class="grid">

                  
                    </div>
                  </div>
              </div>
</div>
          <!--End Popular Products-->
          <!--Banner-->
          <div class="sidebar_widget static-banner">
            <img src="assets/images/begai1.jpg" alt="" />

          </div>
          <!--Banner-->
       
     
      </div>
  </div>
  <!--End Sidebar-->
