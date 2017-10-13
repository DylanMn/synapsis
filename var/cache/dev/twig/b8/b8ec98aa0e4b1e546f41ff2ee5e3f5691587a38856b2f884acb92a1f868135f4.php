<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7e3810185795f69a222ad62a4aef0d34b3a05f836845b7232540db3e50570e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3d11671784ab042d6e38e61103ac91a6ae8d98647dbe5557d18fa7dfbccc8108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d11671784ab042d6e38e61103ac91a6ae8d98647dbe5557d18fa7dfbccc8108->enter($__internal_3d11671784ab042d6e38e61103ac91a6ae8d98647dbe5557d18fa7dfbccc8108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fb9f3d45ec1825df709c04c898959b29e37d2c97b12a694bda4000aa0b40bca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9f3d45ec1825df709c04c898959b29e37d2c97b12a694bda4000aa0b40bca1->enter($__internal_fb9f3d45ec1825df709c04c898959b29e37d2c97b12a694bda4000aa0b40bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d11671784ab042d6e38e61103ac91a6ae8d98647dbe5557d18fa7dfbccc8108->leave($__internal_3d11671784ab042d6e38e61103ac91a6ae8d98647dbe5557d18fa7dfbccc8108_prof);

        
        $__internal_fb9f3d45ec1825df709c04c898959b29e37d2c97b12a694bda4000aa0b40bca1->leave($__internal_fb9f3d45ec1825df709c04c898959b29e37d2c97b12a694bda4000aa0b40bca1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da057271bb8d1c5db2c1ae4a840cd63ecdad6ec3b6e797b7766132618c984730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da057271bb8d1c5db2c1ae4a840cd63ecdad6ec3b6e797b7766132618c984730->enter($__internal_da057271bb8d1c5db2c1ae4a840cd63ecdad6ec3b6e797b7766132618c984730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_743d01e50e0e1a85922cc0b39045c2edd18731f5defcac101cec1f84a07c9909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743d01e50e0e1a85922cc0b39045c2edd18731f5defcac101cec1f84a07c9909->enter($__internal_743d01e50e0e1a85922cc0b39045c2edd18731f5defcac101cec1f84a07c9909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_743d01e50e0e1a85922cc0b39045c2edd18731f5defcac101cec1f84a07c9909->leave($__internal_743d01e50e0e1a85922cc0b39045c2edd18731f5defcac101cec1f84a07c9909_prof);

        
        $__internal_da057271bb8d1c5db2c1ae4a840cd63ecdad6ec3b6e797b7766132618c984730->leave($__internal_da057271bb8d1c5db2c1ae4a840cd63ecdad6ec3b6e797b7766132618c984730_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a1ae64b20dcbaae9a32f1aad99268e9f739667cfec80bef9d4d84d561e4755f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1ae64b20dcbaae9a32f1aad99268e9f739667cfec80bef9d4d84d561e4755f->enter($__internal_8a1ae64b20dcbaae9a32f1aad99268e9f739667cfec80bef9d4d84d561e4755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_406a2ae8dc3da33ab054efd6a7c0cc3950f47cc8c877b63904f510809b99aee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406a2ae8dc3da33ab054efd6a7c0cc3950f47cc8c877b63904f510809b99aee9->enter($__internal_406a2ae8dc3da33ab054efd6a7c0cc3950f47cc8c877b63904f510809b99aee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_406a2ae8dc3da33ab054efd6a7c0cc3950f47cc8c877b63904f510809b99aee9->leave($__internal_406a2ae8dc3da33ab054efd6a7c0cc3950f47cc8c877b63904f510809b99aee9_prof);

        
        $__internal_8a1ae64b20dcbaae9a32f1aad99268e9f739667cfec80bef9d4d84d561e4755f->leave($__internal_8a1ae64b20dcbaae9a32f1aad99268e9f739667cfec80bef9d4d84d561e4755f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bbbc4b8f84c91a85071fea0937ad97b8f0f8904f79fa8d3cadaefaaafe8abfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbbc4b8f84c91a85071fea0937ad97b8f0f8904f79fa8d3cadaefaaafe8abfc->enter($__internal_0bbbc4b8f84c91a85071fea0937ad97b8f0f8904f79fa8d3cadaefaaafe8abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2a87946c3554335beede82ae2f16dd24e19e2cfa540654e81e5a7edbdb0ca3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a87946c3554335beede82ae2f16dd24e19e2cfa540654e81e5a7edbdb0ca3f->enter($__internal_e2a87946c3554335beede82ae2f16dd24e19e2cfa540654e81e5a7edbdb0ca3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2a87946c3554335beede82ae2f16dd24e19e2cfa540654e81e5a7edbdb0ca3f->leave($__internal_e2a87946c3554335beede82ae2f16dd24e19e2cfa540654e81e5a7edbdb0ca3f_prof);

        
        $__internal_0bbbc4b8f84c91a85071fea0937ad97b8f0f8904f79fa8d3cadaefaaafe8abfc->leave($__internal_0bbbc4b8f84c91a85071fea0937ad97b8f0f8904f79fa8d3cadaefaaafe8abfc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Dylan/Check kW/log_user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
