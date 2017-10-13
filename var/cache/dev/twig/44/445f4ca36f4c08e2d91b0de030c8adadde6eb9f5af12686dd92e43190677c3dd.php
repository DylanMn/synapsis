<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9254a408c52101152bc04cce1ed0ba49bafdfdc7605eb24bcdb42e9c9e038243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edff659039703198dfa94f4bdef48ae2192b4342e221aac7d0eb93cdc400d2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edff659039703198dfa94f4bdef48ae2192b4342e221aac7d0eb93cdc400d2fa->enter($__internal_edff659039703198dfa94f4bdef48ae2192b4342e221aac7d0eb93cdc400d2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_16a4ae90b04cfbfa3b0c73aefb6c950a44926e9961363e51c3243d3f9bbaf541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a4ae90b04cfbfa3b0c73aefb6c950a44926e9961363e51c3243d3f9bbaf541->enter($__internal_16a4ae90b04cfbfa3b0c73aefb6c950a44926e9961363e51c3243d3f9bbaf541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_edff659039703198dfa94f4bdef48ae2192b4342e221aac7d0eb93cdc400d2fa->leave($__internal_edff659039703198dfa94f4bdef48ae2192b4342e221aac7d0eb93cdc400d2fa_prof);

        
        $__internal_16a4ae90b04cfbfa3b0c73aefb6c950a44926e9961363e51c3243d3f9bbaf541->leave($__internal_16a4ae90b04cfbfa3b0c73aefb6c950a44926e9961363e51c3243d3f9bbaf541_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/Dylan/Check kW/log_user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
