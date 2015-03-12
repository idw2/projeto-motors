<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 11:35:26
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4265432635490897ec06b44-12183669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5cdd17684347c68f79dc59e59561a0f295f33ad' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/index.tpl',
      1 => 1416577828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4265432635490897ec06b44-12183669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490897ecc76c2_16293203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490897ecc76c2_16293203')) {function content_5490897ecc76c2_16293203($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="bannercontainer" style="margin-top: -4%;margin-bottom: 4%;">
    <div class="banner ">
        <ul>                        
            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider01.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >		
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            New Fiesta 2015 &gt; A partir de  R$29.990
                        </p>
                    </a>
                </div>                                 
            </li>

            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider02.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            Chevrolet Cruze &gt; A partir de  R$49.990
                        </p>
                    </a>
                </div>  
            </li> 

            <li data-transition="curtain-3" data-slotamount="1">
                <img src="/web-files/img/slider/slider03.jpg" alt="//" />
                <div 
                    class="caption lft " 
                    data-x="center"
                    data-y="bottom"
                    data-speed="1000"
                    data-start="500"
                    data-easing="easeOutBack"
                    >
                    <a href="#">
                        <p>
                            <span>Oferta especial <span>&nbsp;</span></span>
                            Corolla 2014 &gt; A partir de  R$48.990
                        </p>
                    </a>
                </div>                                    
            </li> 
        </ul>
    </div>
</div>

<section id="home">
    <div class="container">

        <div class="row introform">
            <form role="form" class="col-sm-12">
                <div class="col-md-2 col-md-offset-1">
                    <div class="form-group">
                        <label for="model1"><strong>Marca:</strong></label>
                        <select class="form-control" id="model1">
                            <option value="0"></option>
                            <option value="3">Audi</option>
                            <option value="4">BMW</option>
                            <option value="5">Chevrolet</option>
                            <option value="7">Citroen</option>
                            <option value="14">Fiat</option>
                            <option value="15">Ford</option>
                            <option value="16">Honda</option>
                            <option value="17">Hyundai</option>
                            <option value="36">Volkswagen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="model2"><strong>Modelo:</strong></label>
                        <select class="form-control" id="model2">
                            <option></option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="model3"><strong>Ano:</strong></label>
                        <select class="form-control" id="model3">
                            <option></option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            <option>2009</option>
                            <option>2008</option>
                            <option>2007</option>
                            <option>2006</option>
                            <option>2005</option>
                            <option>2004</option>
                            <option>2003</option>
                            <option>2002</option>
                            <option>2001</option>
                            <option>2000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="model4"><strong>A partir de: </strong></label>
                        <select class="form-control" id="model4">
                            <option></option>
                            <option>R$20.000</option>
                            <option>R$40.000</option>
                            <option>R$60.000</option>
                            <option>R$80.000</option>
                            <option>R$100.000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="submit"><strong class="advanced">Encontre seu carro:</strong></label>
                    <button type="submit" id="submit" class="src btn bt-sm red">Pesquisar <i class="icon-search"></i></button>
                </div>
            </form>
        </div>


        <div class="row">
            <div class="col-md-9">
                <h3>Recentes</h3>
                <div class="grid">

                    <div class="item-grid">
                        <div class="ribbon red"><span>Novo</span></div>
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent01.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <div class="ribbon"><span>Novo</span></div>
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent02.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <div class="ribbon red"><span>Novo</span></div>
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent01.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <div class="ribbon"><span>Novo</span></div>
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent02.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <div class="ribbon red"><span>Novo</span></div>
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent01.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <div class="ribbon"><span>Novo</span></div>
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent02.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <div class="ribbon red"><span>Novo</span></div>
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent01.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent02.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent01.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent02.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent01.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>

                    <div class="item-grid">
                        <a class="more" href="#"><i class="icon-plus"></i></a>
                        <img src="/web-files/img/rent/rent02.jpg" alt="//">
                        <p>HONDA CITY 2012 <span>R$ 52.900,00</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="list-group alt">
                    <h3>Mais vistos</h3>
                    <a href="#" class="list-group-item">
                        <div class="popular-item">
                            <img src="/web-files/img/top-carrossel/offer01.jpg" alt="//">
                            <strong>HONDA CITY</strong>
                            Ano: 2012<br >
                            Preço: R$52.900
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="popular-item">
                            <img src="/web-files/img/top-carrossel/offer02.jpg" alt="//">
                            <strong>HONDA CITY</strong>
                            Ano: 2012<br >
                            Preço: R$52.900
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="popular-item">
                            <img src="/web-files/img/top-carrossel/offer03.jpg" alt="//">
                            <strong>HONDA CITY</strong>
                            Ano: 2012<br >
                            Preço: R$52.900
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="popular-item">
                            <img src="/web-files/img/top-carrossel/offer04.jpg" alt="//">
                            <strong>HONDA CITY</strong>
                            Ano: 2012<br >
                            Preço: R$52.900
                        </div>
                    </a>
                    <div class="clearfix"></div>
                </div>

                <div class="list-group alt">
                    <h3>Destaques</h3>
                    <a href="#" class="list-group-item">
                        <div class="hot-item">
                            <img src="/web-files/img/rent/rent01.jpg" alt="//">
                            <strong>HONDA CITY</strong>
                            <span>Preço: R$52.900</span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="hot-item">
                            <img src="/web-files/img/rent/rent02.jpg" alt="//">
                            <strong>HONDA CITY</strong>
                            <span>Preço: R$52.900</span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- testimonials -->
        
        <!-- end testimonials -->

        <!-- sevices -->
        <div class="row services">
            <div class="col-sm-12">
                <h2>Nossos Serviços</h2>
                <div id="carousel-services" class="carousel slide">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-globe"></span>
                                </div>
                                <strong>Seminovos</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </div>
                                <strong>Venda seu carro</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <strong>Financiamento</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>
                        </div>


                        <div class="item">

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-globe"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-cog"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-screenshot"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>

                            <div class="services-item">
                                <div class="ico">
                                    <span class="glyphicon glyphicon-screenshot"></span>
                                </div>
                                <strong>Responsive Design</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sevices -->
    </div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
