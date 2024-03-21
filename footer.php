<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<footer>
    <div id="site_map">
        <div class="container"> 
            <div class="col-md-12">
                <h3 class="titulo-mapa-site">Mapa Completo do Site</h3>
                <div class="clearfix">&nbsp;</div>
                <div class="col-md-2 col-xs-6 col-sm-4">
                    <ul class="list-unstyled">
                        <li class="footer-menu-title" class="footer-menu-white"><b>Institucional</b><li>
                        <li><a href="<?php print base_url(); ?>institucional" class="footer-menu-white">História</a></li>
                        <li><a href="<?php print base_url(); ?>institucional" class="footer-menu-white">Carta de Identidade</a></li>
                        <li><a href="<?php print base_url(); ?>unidades" class="footer-menu-white">Nossas Unidades</a></li>
                        <li><a href="<?php print base_url(); ?>satisfacao" class="footer-menu-white">Pesquisa de Satisfação</a></li>
                        <li><a href="<?php print base_url(); ?>guia" class="footer-menu-white">Guia Médico</a></li>
                        <!-- DESATIVADO
                        <li><a href="<?php print base_url(); ?>institucional" class="footer-menu-white">Missão</a></li>
                        <li><a href="<?php print base_url(); ?>institucional" class="footer-menu-white">Visão</a></li>
                        <li><a href="<?php print base_url(); ?>institucional" class="footer-menu-white">Valores</a></li> 
                        -->
                        <li><a href="<?php print base_url(); ?>institucional" class="footer-menu-white">Nossa Marca</a></li>
                        <li><a href="<?php print base_url(); ?>indicadores" class="footer-menu-white">Indicadores</a></li>
                        <li><a href="<?php print base_url(); ?>videos" class="footer-menu-white">Vídeos</a></li>
                    </ul>
                </div>

                <?php $i = 0; foreach ($this->paginas_model->getPlanos(3) as $l_planos): ?>  
                    <div class="col-md-3 col-xs-6 col-sm-4">
                        <ul class="list-unstyled">
                                <?php print ($i == 0) ? '<li class="footer-menu-title"><b>Nossos Planos</b><li>' : '<li>&nbsp;</li>'; ?>
                                <li><a href="<?php print base_url(); ?>planos/#<?php print $l_planos->slug; ?>" class="footer-menu-white">Plano <?php print $l_planos->titulo; ?></a>
                                    <ul class="list-unstyled">
                                        <?php foreach ($this->paginas_model->getPlanosItens($l_planos->id) as $l_planos_itens): ?> 
                                            <li><a href="<?php print base_url(); ?>planos/#<?php print $l_planos->slug; ?>" class="footer-menu-white"><?php print $l_planos_itens->titulo; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>						
                        </ul>
                    </div>
                <?php $i++; endforeach; ?>
                 
                <div class="clearfix"></div>
                <div class="col-md-2 col-xs-6 col-sm-4">      
                    <ul class="list-unstyled">
                        <li class="footer-menu-title" class="footer-menu-white"><b>Programas</b><li>
                        <li><a href="<?php print base_url(); ?>programas/fique-bem-comendo-bem" class="footer-menu-white">Fique bem comendo bem</a></li>
                        <li><a href="<?php print base_url(); ?>programas/a-espera-de-um-bebe" class="footer-menu-white">À espera de um bebê</a></li>
                        <li><a href="<?php print base_url(); ?>programas/vitalidade" class="footer-menu-white">Vitalidade</a></li>
                    </ul>     
                </div>
                <div class="col-md-3 col-xs-6 col-sm-4">
                    <ul class="list-unstyled">
                        <li class="footer-menu-title" class="footer-menu-white"><b>Serviços</b><li>
                        <li><a href="<?php print base_url(); ?>servicos" class="footer-menu-white">Medicina preventiva</a></li>
                        <li><a href="<?php print base_url(); ?>servicos" class="footer-menu-white">Exames laboratoriais</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-xs-6 col-sm-4">
                    <ul class="list-unstyled">
                        <li class="footer-menu-title" class="footer-menu-white"><b>Portais</b><li>
                        <li><a href="<?php print base_url(); ?>portais/tiss" class="footer-menu-white">Portal TISS</a></li>
                        <li><a href="<?php print base_url(); ?>portais/clientes" class="footer-menu-white">Portal do cliente</a></li>					
                    </ul>
                </div>	

                <div class="col-md-3 col-xs-6 col-sm-4">
                    <ul class="list-unstyled">
                        <li class="footer-menu-title" class="footer-menu-white"><b>Contato</b><li>
                        <li><a href="<?php print base_url(); ?>contato" class="footer-menu-white">Fale conosco</a></li>
                        <li><a href="<?php print base_url(); ?>contato" class="footer-menu-white">Onde estamos?</a></li>
                    </ul>
                </div>

            </div>                    
        </div>
    </div>
    <div id="info-extra" class="container">
        <div class="container-fluid">
            <div class="pull-left"><a href="#" class="logomarca-rodape"></a></div>
            <div class="info-endereco" style="width: 231px;">
                <p class="size-16">Rua Atalípio Magarinos, 318, Centro <br> Concórdia - SC</p>
            </div>

            <a href="<?php print $this->config_model->getConfig(6)[0]->parametros; ?>" target="_blank">
                <div class="ico-facebook">
                    <p>
                        <span class="titulo-medium strong size-18">Plano de Saúde São Camilo</span><br>
                        <span class="daxlight strong">Saúde/Médico/Farmácia</span>
                    </p>
                </div>
            </a>
            <div class="pull-left"  style="padding: 0;">
                <div class="clearfix">
                	<a href="//atendimentoabramge.com.br/" target="_blank">
                		<img style="margin: 21px 16px 0px 20px;" src="<?php print base_url(); ?>web-files/site/images/abramge.jpg" width="90">
                	</a>
                </div>                
            </div> 
            <div class="info-ouvidoria size-13"  style="padding: 0;">
                <div class="clearfix"><a href="<?php print $this->config_model->getConfig(5)[0]->parametros; ?>" id="ico-ouvidoria" target="_blank">Ouvidoria</a></div>
                <div class="clearfix"><a href="<?php print base_url(); ?>politica-de-privacidade">Política de Privacidade</a> | <a href="<?php print base_url(); ?>termos-de-uso">Termo de Uso</a></div>                                     
                <div class="clearfix">
                    <a href="//www.ans.gov.br/" target="_blank" id="registro-ans"></a>
                    <a href="#" id="logo-ans"></a>
                </div>
            </div>                        
        </div>  
        <center>O Plano São Camilo respeita a privacidade dos titulares de dados, empenhando-se na proteção dos dados tratados através da sua Política de Privacidade do Portal www.planosaocamilo.com.br.</center><br>
    </div>    
</footer>
</div>
<div class="sb-slidebar sb-left sb-width-custom"  data-sb-width="100%">
    <a href="#" class="sb-close"><i class="fa fa-times-circle"></i></a>

    <div class="clearfix">&nbsp;</div>
    <div class="centralizado col-sm-2 col-md-2 text-center"><img src="<?php print base_url(); ?>web-files/site/images/logomarca_mobile.png"></div>
    <div class="clearfix">&nbsp;</div>

    <div class="col-md-3 busca-fonte centralizado">
        <form method="POST"  action="<?php print base_url(); ?>guia/busca" id="form-guia-busca">
            <input type="hidden" value="formBusca" name="tipoBusca">                        
            <div id="busca-input-mobile">
                <div class="input-group">
                    <input type="text" name="nome_do_prestador" id="nome_do_prestador" class="busca-query form-control" placeholder="O que você está procurando?" />
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
        </form>        
    </div> 
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <ul id="menu-mobile">
        <li><h4><a href="<?php print base_url(); ?>institucional" class="seta-indicadora">&#8250; Institucional</a></h4></li>                        
        <li><h4><a href="<?php print base_url(); ?>planos" class="seta-indicadora">&#8250; Planos de saúde</a></h4>
            <ul>
                <?php foreach ($this->paginas_model->getPlanos(3) as $l_planos): ?>  
                <li><a onclick="window.location.href='#<?php print $l_planos->slug; ?>';window.location.reload()" href="<?php print base_url(); ?>planos/#<?php print $l_planos->slug; ?>">Plano <?php print $l_planos->titulo; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>                       
        <li><h4><a href="<?php print base_url(); ?>servicos" class="seta-indicadora">&#8250; Serviços</a></h4></li>                        
        <li><h4><a href="<?php print base_url(); ?>portais/clientes" class="seta-indicadora">&#8250; Portal do Cliente</a></h4>
            <ul>
                <li><a href="<?php print base_url(); ?>portais/clientes">Portal Cliente</a></li>
                <li><a href="<?php print base_url(); ?>portais/tiss">Portal TISS</a></li>
            </ul>
        </li>                        
        <li><h4><a href="<?php print base_url(); ?>dpo" class="seta-indicadora">&#8250; Contato DPO</a></h4></li>  
        <li><h4><a href="<?php print base_url(); ?>contato" class="seta-indicadora">&#8250; Contato</a></h4></li>
        <li><h4><a href="<?php print base_url(); ?>guia" class="seta-indicadora">&#8250; Guia Médico</a></h4></li>
        <li><h4><a href="<?php print base_url(); ?>satisfacao" class="seta-indicadora">&#8250; Pesquisa de Satisfação</a></h4></li>
    </ul>
</div>

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDTMFojgC9Hn0dzD1PjK_lNDu7oA6YBHF4"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1013836472185400" crossorigin="anonymous"></script>
<script src="<?php print base_url(); ?>web-files/site/js/bootstrap.min.js"></script>
<script src="<?php print base_url(); ?>web-files/site/js/bootstrap-tabcollapse.js"></script>
<script src="<?php print base_url(); ?>web-files/site/js/responsive-tabs.js"></script>
<script src="<?php print base_url(); ?>web-files/site/js/lightbox.js"></script>
<script src="<?php print base_url(); ?>web-files/site/js/html5.js"></script>
<script src="<?php print base_url(); ?>web-files/site/js/jquery.ui.ease.js"></script>
<script src="<?php print base_url(); ?>web-files/site/js/jquery.flexslider-min.js"></script>            
<script src="<?php print base_url(); ?>web-files/site/js/jquery.fitvid.js"></script>     
<script src="<?php print base_url(); ?>web-files/site/js/slidebars.js"></script> 
<script src="<?php print base_url(); ?>web-files/site/js/easy-responsive-tabs.js"></script> 
<script src="<?php print base_url(); ?>web-files/site/js/jqBootstrapValidation.js"></script> 
<script src="<?php print base_url(); ?>web-files/site/js/custom.js"></script>            
<?php print $this->config_model->getConfig(3)[0]->parametros; ?>

</body>
</html>
