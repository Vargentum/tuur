<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <?//  <meta name="viewport" content="width=device-width, initial-scale=1.0"> ?>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <base href="http://<?=$_SERVER['HTTP_HOST']?>/"/>
        <!--[if lte IE 6]></base><![endif]-->
        <title><?$APPLICATION->ShowTitle()?></title>

        <!-- Le styles -->
        <link href="<?=SITE_TEMPLATE_PATH;?>/assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                /*padding-top: 60px;*/
                /*padding-bottom: 40px;*/
            }
            .container {
                min-width: 1024px;
                width: 1024px;
                max-width: 1366px;
            }

            /*.thumbnails { text-align:center; }*/
            /*.thumbnails > li > a { display: inline-block; float: none; }*/

            /*.thumbnail, .thumbnail:hover { -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; border: none; }*/

            .thumbnails { text-align:center; }
            .thumbnails > .thumbnail {
                padding:0; display: inline-block; float: none; margin-right: 10px;  margin-bottom: 15px; width:310px; height: 350px; position: relative; overflow: hidden;
                /*-moz-box-shadow: 0 1px 7px 0.75px #7bdbd6;*/
                /*-webkit-box-shadow: 0 1px 7px 0.75px #7bdbd6;*/
                /*box-shadow: 0 2px 6px 0.21px #000;*/
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: #c9c9c9 0 1px 7px 0.75px;
                -moz-box-shadow:  #c9c9c9 0 1px 7px 0.75px;
                box-shadow: #c9c9c9 0 1px 7px 0.75px;
                behavior: url(/pie/PIE.php);
            }
            .thumbnails > .thumbnail:hover {
                text-decoration: none;
            }
            .thumbnails > .thumbnail .preview {
                width: 310px;
                height: 200px;
                overflow: hidden;
                position: relative;
            }
            .thumbnails > .thumbnail .preview img {
                position:absolute; top:0px; left:0px; z-index:-1;
            }
            .thumbnail-container {
                background: #fff;
                /*max-width: 460px;*/
                margin: 0 auto;
            }


        </style>

        <link href="<?=SITE_TEMPLATE_PAT;?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <?$APPLICATION->ShowHead()?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="<?=SITE_TEMPLATE_PATH;?>/assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?=SITE_TEMPLATE_PATH;?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114"
              href="<?=SITE_TEMPLATE_PATH;?>/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=SITE_TEMPLATE_PATH;?>/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH;?>/assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH;?>/assets/ico/favicon.png">
    </head>

    <body onload="adaptive()">

    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <div class="background"></div>
    <div class="row-fluid top-ads">
    </div>

    <div class="row header-line">
        <div class="container">
        <div class="span2" style="margin-left:50px;">
            <img src="<?=SITE_TEMPLATE_PATH;?>/images/logo_tuur.png" width="161" height="23" />
        </div>
        <div class="span3 offset2">
            <a href="javascript:void();" id="btn-show-filter"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/down.png" width="12" height="12" /> ТОЧНЫЙ ПОИСК ТУРА
            </a>
        </div>
        <div class="span3 offset2">
            <div class="pull-right">
                <a href="#">ВХОД</a>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/roumb.png" width="12" height="12" />
                <a href="#">РЕГИСТРАЦИЯ</a>
            </div>
        </div>
        </div>
    </div>

    <div class="container">


    <div class="row-fluid" style="margin:20px 0 10px 0">
        <div class="span2 offset" style="margin-left: 40px;">
            <a href="" class="btn-lighttours">САМЫЕ <br/>ДЕШЁВЫЕ <br/>ТУРЫ</a>
        </div>
    <div class="navbar">
    <div class="">

        <div class="nav-collapse collapse">
            <ul class="nav filter-type-tours">
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/1.jpg" width="70" height="70"/> </li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/2.jpg" width="70" height="70"/></li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/3.jpg" width="70" height="70"/></li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/4.jpg" width="70" height="70"/></li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/5.jpg" width="70" height="70"/></li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/6.jpg" width="70" height="70"/></li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/7.jpg" width="70" height="70"/></li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/8.jpg" width="93" height="70"/></li>
                <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/9.jpg" width="93" height="70"/></li>
                <li class="selectedBox"></li>
            </ul>
        </div>

        </div>
        </div>
    </div>

    <div class="filter-grey-line">
    </div>

    <div id="filter-block" style="line-height: 55px; height: 55px; margin: 5px 0; display: none;">
        <div class="span"></div>
        <div class="span" style="width:350px">
            <div class="filter-label-price pull-left">ЦЕНА ДО:</div>
            <div class="filter-label-currency">выбрать валюту</div>
            <div class="navbar">
                <div class="">

                    <div class="nav-collapse collapse">
                        <ul class="nav filter-price-tours">
                            <li>250</li>
                            <li>500</li>
                            <li>750</li>
                            <li>1000</li>
                            <li>1000+</li>
                        </ul>
                    </div>

                </div>

                <div class="pull-right btn-group" style="line-height: 20px;">
                    <button class="btn" style="border: 0px solid; background: #fff; box-shadow: none; -moz-box-shadow: none;padding:0;">USD</button>
                    <button class="" data-toggle="dropdown" style="border: 0; background: transparent; padding:0;">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/images/filter_arrow_currency.png" width="27" height="27" />
                    </button>
                    <ul class="dropdown-menu">
                        <!-- dropdown menu links -->
                        <li><a href="#">USD</a></li>
                        <li><a href="#">RUB</a></li>
                    </ul>
                </div>

<!--                <div class="pull-right filter-element-currency">-->
<!--                    <select name="" class="span1">-->
<!--                        <option value="usd"> USD </option>-->
<!--                        <option value="RUR"> RUR </option>-->
<!--                    </select>-->
<!--                </div>-->

            </div>

        </div>
        <div class="filter-vert-line span1">&nbsp;</div>

<!--        BEGIN Count stars-->
        <div class="span2">
            <div class="filter-label-price pull-left">ЗВЕЗДЫ:</div>
            <div class="navbar">
                <div class="">
                    <div class="nav-collapse collapse">
                        <ul class="nav filter-stars-tours">
                            <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/star_active.png" width="16" height="16"/></li>
                            <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/star_active.png" width="16" height="16"/></li>
                            <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/star_active.png" width="16" height="16"/></li>
                            <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/star_noactive.png" width="16" height="16"/></li>
                            <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/star_noactive.png" width="16" height="16"/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!--        END Count stars-->

        <div class="filter-vert-line span1">&nbsp;</div>
        <div class="span3">

            <div class="filter-label-price pull-left">НА СКОЛЬКО ДНЕЙ:</div>
            <div class="navbar">
                <div class="">

                    <div class="nav-collapse collapse">
                        <ul class="nav filter-days-tours">
                            <li>3</li>
                            <li>7</li>
                            <li>10</li>
                            <li>12</li>
                            <li>15</li>
                            <li>15+</li>
                        </ul>
                    </div>
            </div>
                </div>


                </div>

        <div class="filter-vert-line span1">&nbsp;</div>

    </div>
</div>



<!--    <div class="content" style="margin: 0px auto; max-width: 1366px; min-width: 1024px; width: 80%;">-->
<!--    <div class="">-->
<!---->
<!--    </div>-->
<!--</div>-->



<!--    <div class="btn-group" data-toggle="buttons-checkbox">-->
<!--        <button type="button" class="btn">250</button>-->
<!--        <button type="button" class="btn">500</button>-->
<!--        <button type="button" class="btn">750</button>-->
<!--        <button type="button" class="btn">1000</button>-->
<!--        <button type="button" class="btn">1000+</button>-->
<!--    </div>-->

<!--        <div style='position:relative;left:0px;top:0px;' onMouseOver="document.getElementById('visible').style.visibility='visible'" id='hidden'>-->
<!--            10-->
<!--        <select style='position:absolute;left:0px;top:0px;cursor:pointer;visibility:hidden;'-->
<!--                onMouseOut="document.getElementById('visible').style.visibility='hidden'" onChange='this.form.submit()'-->
<!--        id='visible' multiple size='3'>-->
<!--        <option selected value=10>10</option>-->
<!--        <option value=20>20</option>-->
<!--        <option value=50>50</option>-->
<!--        </select>-->
<!--    </div>-->
<? /*
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Project name</a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
*/?>