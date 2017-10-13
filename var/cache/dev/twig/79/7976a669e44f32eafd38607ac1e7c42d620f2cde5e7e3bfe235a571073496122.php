<?php

/* projectChart.html.twig */
class __TwigTemplate_6713a01adf653e7f0da0dac7e427a7fbb8491c58af20f8e1d9fe023a8b0422ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_194a8de5c407eaf9d369386dc9b20d7b05114f588db56256c562b478642161e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194a8de5c407eaf9d369386dc9b20d7b05114f588db56256c562b478642161e2->enter($__internal_194a8de5c407eaf9d369386dc9b20d7b05114f588db56256c562b478642161e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectChart.html.twig"));

        $__internal_4642094496ae0c580658275fa7a091746f3c56e48d3a425a83ebada01cc64722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4642094496ae0c580658275fa7a091746f3c56e48d3a425a83ebada01cc64722->enter($__internal_4642094496ae0c580658275fa7a091746f3c56e48d3a425a83ebada01cc64722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectChart.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_194a8de5c407eaf9d369386dc9b20d7b05114f588db56256c562b478642161e2->leave($__internal_194a8de5c407eaf9d369386dc9b20d7b05114f588db56256c562b478642161e2_prof);

        
        $__internal_4642094496ae0c580658275fa7a091746f3c56e48d3a425a83ebada01cc64722->leave($__internal_4642094496ae0c580658275fa7a091746f3c56e48d3a425a83ebada01cc64722_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e01b57c3caa0930c23a8ce238631d7a2de31ce29941d212399d2817f05a2c258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01b57c3caa0930c23a8ce238631d7a2de31ce29941d212399d2817f05a2c258->enter($__internal_e01b57c3caa0930c23a8ce238631d7a2de31ce29941d212399d2817f05a2c258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97cbd625754218dbae259ca2e921aa966b0dc544035e6cde5ce3f4aa0e26d52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cbd625754218dbae259ca2e921aa966b0dc544035e6cde5ce3f4aa0e26d52c->enter($__internal_97cbd625754218dbae259ca2e921aa966b0dc544035e6cde5ce3f4aa0e26d52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_97cbd625754218dbae259ca2e921aa966b0dc544035e6cde5ce3f4aa0e26d52c->leave($__internal_97cbd625754218dbae259ca2e921aa966b0dc544035e6cde5ce3f4aa0e26d52c_prof);

        
        $__internal_e01b57c3caa0930c23a8ce238631d7a2de31ce29941d212399d2817f05a2c258->leave($__internal_e01b57c3caa0930c23a8ce238631d7a2de31ce29941d212399d2817f05a2c258_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44116c8e92aa2e7dc435a0753931f8f3a57f0f7b063bc481458104ffcb53a9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44116c8e92aa2e7dc435a0753931f8f3a57f0f7b063bc481458104ffcb53a9c6->enter($__internal_44116c8e92aa2e7dc435a0753931f8f3a57f0f7b063bc481458104ffcb53a9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_edf44211d11c02c1ae894c83aa3250c66fbab6f2f50198f984a2235aed0e6b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf44211d11c02c1ae894c83aa3250c66fbab6f2f50198f984a2235aed0e6b02->enter($__internal_edf44211d11c02c1ae894c83aa3250c66fbab6f2f50198f984a2235aed0e6b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_edf44211d11c02c1ae894c83aa3250c66fbab6f2f50198f984a2235aed0e6b02->leave($__internal_edf44211d11c02c1ae894c83aa3250c66fbab6f2f50198f984a2235aed0e6b02_prof);

        
        $__internal_44116c8e92aa2e7dc435a0753931f8f3a57f0f7b063bc481458104ffcb53a9c6->leave($__internal_44116c8e92aa2e7dc435a0753931f8f3a57f0f7b063bc481458104ffcb53a9c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d1ef8b8c497f3d600eb60f87a2cbcfe21f3e69b89df9e9303a9e94bcd02e13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1ef8b8c497f3d600eb60f87a2cbcfe21f3e69b89df9e9303a9e94bcd02e13d->enter($__internal_5d1ef8b8c497f3d600eb60f87a2cbcfe21f3e69b89df9e9303a9e94bcd02e13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_193434a0ff494479d825d6c701704c5d7bf1ec55305c265045dbf120120ef7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193434a0ff494479d825d6c701704c5d7bf1ec55305c265045dbf120120ef7ea->enter($__internal_193434a0ff494479d825d6c701704c5d7bf1ec55305c265045dbf120120ef7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "            <!-- Load jQuery from Google's CDN if needed -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

            <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
            <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
            <script type=\"text/javascript\">
                ";
        // line 17
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["piechart"]) ? $context["piechart"] : $this->getContext($context, "piechart")));
        echo "
            </script>

            <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
        ";
        
        $__internal_193434a0ff494479d825d6c701704c5d7bf1ec55305c265045dbf120120ef7ea->leave($__internal_193434a0ff494479d825d6c701704c5d7bf1ec55305c265045dbf120120ef7ea_prof);

        
        $__internal_5d1ef8b8c497f3d600eb60f87a2cbcfe21f3e69b89df9e9303a9e94bcd02e13d->leave($__internal_5d1ef8b8c497f3d600eb60f87a2cbcfe21f3e69b89df9e9303a9e94bcd02e13d_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ec807be77881168d0a7fa8efc3a71ae511bceb1f39787ec73a43ea207948c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec807be77881168d0a7fa8efc3a71ae511bceb1f39787ec73a43ea207948c78->enter($__internal_5ec807be77881168d0a7fa8efc3a71ae511bceb1f39787ec73a43ea207948c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9302d370fe0965bcecddfefd747a2bd212276cd18e9ffb6a82ee31b1ca0629e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9302d370fe0965bcecddfefd747a2bd212276cd18e9ffb6a82ee31b1ca0629e6->enter($__internal_9302d370fe0965bcecddfefd747a2bd212276cd18e9ffb6a82ee31b1ca0629e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9302d370fe0965bcecddfefd747a2bd212276cd18e9ffb6a82ee31b1ca0629e6->leave($__internal_9302d370fe0965bcecddfefd747a2bd212276cd18e9ffb6a82ee31b1ca0629e6_prof);

        
        $__internal_5ec807be77881168d0a7fa8efc3a71ae511bceb1f39787ec73a43ea207948c78->leave($__internal_5ec807be77881168d0a7fa8efc3a71ae511bceb1f39787ec73a43ea207948c78_prof);

    }

    public function getTemplateName()
    {
        return "projectChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 22,  117 => 17,  109 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 23,  50 => 22,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            <!-- Load jQuery from Google's CDN if needed -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

            <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
            <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
            <script type=\"text/javascript\">
                {{ chart(piechart) }}
            </script>

            <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "projectChart.html.twig", "/Users/Dylan/Check kW/log_user/app/Resources/views/projectChart.html.twig");
    }
}
