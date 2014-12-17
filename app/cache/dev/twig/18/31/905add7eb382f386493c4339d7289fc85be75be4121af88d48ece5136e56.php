<?php

/* ::base.html.twig */
class __TwigTemplate_1831905add7eb382f386493c4339d7289fc85be75be4121af88d48ece5136e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'estilo_body' => array($this, 'block_estilo_body'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascriptsAdd' => array($this, 'block_javascriptsAdd'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 7
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body ";
        // line 23
        $this->displayBlock('estilo_body', $context, $blocks);
        echo ">
        <div class=\"container\">
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "               
        </div>
        ";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "        ";
        $this->displayBlock('javascriptsAdd', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        // line 5
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=utf-8\" />
        ";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Nimbu Notificaciones Push";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />          
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />            
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-select.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-select.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/docs.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />


        ";
    }

    // line 23
    public function block_estilo_body($context, array $blocks = array())
    {
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "                <div class=\"container\">
                    Esto es el body                
                </div>
            ";
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        // line 32
        echo "            Estos es el footer
        ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>            
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>      
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/maskedinput.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/alertify/alertify.js"), "html", null, true);
        echo "\"></script>
            <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/alertify/alertify.core.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/alertify/alertify.default.css"), "html", null, true);
        echo "\" />
            <!-- Bootstrap 3 theme -->
            <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/alertify/alertify.bootstrap3.css"), "html", null, true);
        echo "\" />
          
        ";
    }

    // line 50
    public function block_javascriptsAdd($context, array $blocks = array())
    {
        // line 51
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 51,  200 => 50,  193 => 47,  188 => 45,  184 => 44,  180 => 43,  176 => 42,  172 => 41,  168 => 40,  164 => 39,  160 => 38,  156 => 37,  152 => 36,  147 => 35,  144 => 34,  139 => 32,  136 => 31,  129 => 26,  126 => 25,  121 => 23,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  92 => 12,  89 => 11,  83 => 7,  78 => 5,  75 => 4,  69 => 53,  66 => 50,  63 => 34,  61 => 31,  57 => 29,  55 => 25,  50 => 23,  44 => 21,  42 => 11,  34 => 7,  32 => 4,  27 => 1,);
    }
}
