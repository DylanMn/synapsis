<?php

/* default/index.html.twig */
class __TwigTemplate_fb7b80973381f6821c92f4c4b367a0e99135515c5d94655dc89cab5f64f31188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6309a7766a361605efbb8cbeb6055807050bf70da163c115f008f3725059d5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6309a7766a361605efbb8cbeb6055807050bf70da163c115f008f3725059d5bc->enter($__internal_6309a7766a361605efbb8cbeb6055807050bf70da163c115f008f3725059d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_c06bc6bfc6a9d519a68f1d3ed3767a01836d03ad0d519b723d5fa1fe92fc2acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06bc6bfc6a9d519a68f1d3ed3767a01836d03ad0d519b723d5fa1fe92fc2acf->enter($__internal_c06bc6bfc6a9d519a68f1d3ed3767a01836d03ad0d519b723d5fa1fe92fc2acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6309a7766a361605efbb8cbeb6055807050bf70da163c115f008f3725059d5bc->leave($__internal_6309a7766a361605efbb8cbeb6055807050bf70da163c115f008f3725059d5bc_prof);

        
        $__internal_c06bc6bfc6a9d519a68f1d3ed3767a01836d03ad0d519b723d5fa1fe92fc2acf->leave($__internal_c06bc6bfc6a9d519a68f1d3ed3767a01836d03ad0d519b723d5fa1fe92fc2acf_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f110f4a62d8d759cdbb046f73b44719491b20ee6536c23618ee72024fe20ca61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f110f4a62d8d759cdbb046f73b44719491b20ee6536c23618ee72024fe20ca61->enter($__internal_f110f4a62d8d759cdbb046f73b44719491b20ee6536c23618ee72024fe20ca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6290daa46f4d76b5989571adbf420831b96d7b2c8e8a76fead4e7951f897ecec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6290daa46f4d76b5989571adbf420831b96d7b2c8e8a76fead4e7951f897ecec->enter($__internal_6290daa46f4d76b5989571adbf420831b96d7b2c8e8a76fead4e7951f897ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                <h1><span>Welcome back </span> </h1>
                ";
        } else {
            // line 13
            echo "                    <h1><span>Welcome to</span> Synapsis</h1>
                ";
        }
        // line 15
        echo "            </div>

            <div id=\"status\">

                <div>
                    ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                        <a href=\"/add\">Add project</a>

                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productsData"]) ? $context["productsData"] : $this->getContext($context, "productsData")));
            foreach ($context['_seq'] as $context["_key"] => $context["productData"]) {
                // line 28
                echo "                           <a href=\"project/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productData"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productData"], "domain", array()), "html", null, true);
                echo "</a>
                            <hr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
                    ";
        } else {
            // line 33
            echo "
                        <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

                    ";
        }
        // line 37
        echo "
                </div>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>



                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_6290daa46f4d76b5989571adbf420831b96d7b2c8e8a76fead4e7951f897ecec->leave($__internal_6290daa46f4d76b5989571adbf420831b96d7b2c8e8a76fead4e7951f897ecec_prof);

        
        $__internal_f110f4a62d8d759cdbb046f73b44719491b20ee6536c23618ee72024fe20ca61->leave($__internal_f110f4a62d8d759cdbb046f73b44719491b20ee6536c23618ee72024fe20ca61_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c16e3740dbefa17b37c196b6b2c13369e6625d14cbb346960cfb21a721fbf01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c16e3740dbefa17b37c196b6b2c13369e6625d14cbb346960cfb21a721fbf01->enter($__internal_4c16e3740dbefa17b37c196b6b2c13369e6625d14cbb346960cfb21a721fbf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e3c16b93ad85facde113cd578997a4a82d310d7dcb7ee12917d85c281db27271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c16b93ad85facde113cd578997a4a82d310d7dcb7ee12917d85c281db27271->enter($__internal_e3c16b93ad85facde113cd578997a4a82d310d7dcb7ee12917d85c281db27271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 55
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_e3c16b93ad85facde113cd578997a4a82d310d7dcb7ee12917d85c281db27271->leave($__internal_e3c16b93ad85facde113cd578997a4a82d310d7dcb7ee12917d85c281db27271_prof);

        
        $__internal_4c16e3740dbefa17b37c196b6b2c13369e6625d14cbb346960cfb21a721fbf01->leave($__internal_4c16e3740dbefa17b37c196b6b2c13369e6625d14cbb346960cfb21a721fbf01_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 55,  146 => 54,  121 => 37,  113 => 34,  110 => 33,  106 => 31,  94 => 28,  90 => 27,  83 => 23,  79 => 22,  74 => 21,  72 => 20,  65 => 15,  61 => 13,  57 => 11,  55 => 10,  50 => 7,  41 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}




{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <h1><span>Welcome back </span> </h1>
                {% else %}
                    <h1><span>Welcome to</span> Synapsis</h1>
                {% endif %}
            </div>

            <div id=\"status\">

                <div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                        <a href=\"/add\">Add project</a>

                        {% for productData in productsData %}
                           <a href=\"project/{{ productData.id }}\">{{ productData.domain }}</a>
                            <hr>
                        {% endfor %}

                    {% else %}

                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>

                    {% endif %}

                </div>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>



                </p>
            </div>

        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/Users/Dylan/Check kW/log_user/app/Resources/views/default/index.html.twig");
    }
}
