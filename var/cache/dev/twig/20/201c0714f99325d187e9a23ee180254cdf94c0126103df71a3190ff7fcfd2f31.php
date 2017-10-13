<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2cfdd4b13faa7921f37df7a7a0fbc4fcc9a5a94994ccfb71c0d50b9b529d8c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae2a8bbd0d819127de2dfbf07d96894d1b04b551620b69859fb99143c2b93403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2a8bbd0d819127de2dfbf07d96894d1b04b551620b69859fb99143c2b93403->enter($__internal_ae2a8bbd0d819127de2dfbf07d96894d1b04b551620b69859fb99143c2b93403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f23651b9cac5784ff9274c0860ec068e44306f0e5afec63d644c00c71c5c599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f23651b9cac5784ff9274c0860ec068e44306f0e5afec63d644c00c71c5c599->enter($__internal_1f23651b9cac5784ff9274c0860ec068e44306f0e5afec63d644c00c71c5c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2a8bbd0d819127de2dfbf07d96894d1b04b551620b69859fb99143c2b93403->leave($__internal_ae2a8bbd0d819127de2dfbf07d96894d1b04b551620b69859fb99143c2b93403_prof);

        
        $__internal_1f23651b9cac5784ff9274c0860ec068e44306f0e5afec63d644c00c71c5c599->leave($__internal_1f23651b9cac5784ff9274c0860ec068e44306f0e5afec63d644c00c71c5c599_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00b23843ea08c16415289c5a9cc0390fcf4772b359a5da69329a48166b11d643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b23843ea08c16415289c5a9cc0390fcf4772b359a5da69329a48166b11d643->enter($__internal_00b23843ea08c16415289c5a9cc0390fcf4772b359a5da69329a48166b11d643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe830e2d8e549c0447cfe6acdf713ede20e6638567d22727cd8640bc81dc95ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe830e2d8e549c0447cfe6acdf713ede20e6638567d22727cd8640bc81dc95ca->enter($__internal_fe830e2d8e549c0447cfe6acdf713ede20e6638567d22727cd8640bc81dc95ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fe830e2d8e549c0447cfe6acdf713ede20e6638567d22727cd8640bc81dc95ca->leave($__internal_fe830e2d8e549c0447cfe6acdf713ede20e6638567d22727cd8640bc81dc95ca_prof);

        
        $__internal_00b23843ea08c16415289c5a9cc0390fcf4772b359a5da69329a48166b11d643->leave($__internal_00b23843ea08c16415289c5a9cc0390fcf4772b359a5da69329a48166b11d643_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_554b59e262aa95057b7ddad127b1c1dec5895ef544c5eff5e542a8e65aa1a321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554b59e262aa95057b7ddad127b1c1dec5895ef544c5eff5e542a8e65aa1a321->enter($__internal_554b59e262aa95057b7ddad127b1c1dec5895ef544c5eff5e542a8e65aa1a321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78c820faef8bcf4614ba9a03b159a8fe382baa240506bd3dc02cd1abaa48463c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c820faef8bcf4614ba9a03b159a8fe382baa240506bd3dc02cd1abaa48463c->enter($__internal_78c820faef8bcf4614ba9a03b159a8fe382baa240506bd3dc02cd1abaa48463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_78c820faef8bcf4614ba9a03b159a8fe382baa240506bd3dc02cd1abaa48463c->leave($__internal_78c820faef8bcf4614ba9a03b159a8fe382baa240506bd3dc02cd1abaa48463c_prof);

        
        $__internal_554b59e262aa95057b7ddad127b1c1dec5895ef544c5eff5e542a8e65aa1a321->leave($__internal_554b59e262aa95057b7ddad127b1c1dec5895ef544c5eff5e542a8e65aa1a321_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d0e6554790d81abd159728d9d119e2c8d658f050166a59940a142e2c0d97dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0e6554790d81abd159728d9d119e2c8d658f050166a59940a142e2c0d97dac->enter($__internal_3d0e6554790d81abd159728d9d119e2c8d658f050166a59940a142e2c0d97dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6de580c921e1f8d54e032c8ef5340f316e2bb4a005f279e9958287ed5a6cb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6de580c921e1f8d54e032c8ef5340f316e2bb4a005f279e9958287ed5a6cb9b->enter($__internal_b6de580c921e1f8d54e032c8ef5340f316e2bb4a005f279e9958287ed5a6cb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b6de580c921e1f8d54e032c8ef5340f316e2bb4a005f279e9958287ed5a6cb9b->leave($__internal_b6de580c921e1f8d54e032c8ef5340f316e2bb4a005f279e9958287ed5a6cb9b_prof);

        
        $__internal_3d0e6554790d81abd159728d9d119e2c8d658f050166a59940a142e2c0d97dac->leave($__internal_3d0e6554790d81abd159728d9d119e2c8d658f050166a59940a142e2c0d97dac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Dylan/Check kW/log_user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
