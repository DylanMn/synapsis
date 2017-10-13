<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_56be5722d52c48329a192fed60c7df6a68d1ae64796d4c6f76dd75e282a83b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86a1ac9f44c5afe2d77c2d309f66bc8a5b091fb97e6bbeb17db8c18ba38e2f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a1ac9f44c5afe2d77c2d309f66bc8a5b091fb97e6bbeb17db8c18ba38e2f30->enter($__internal_86a1ac9f44c5afe2d77c2d309f66bc8a5b091fb97e6bbeb17db8c18ba38e2f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dd529743ed0165b08c05d0b1ab0e1ec41d4544dc16dc7fe540c39da5c80e6826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd529743ed0165b08c05d0b1ab0e1ec41d4544dc16dc7fe540c39da5c80e6826->enter($__internal_dd529743ed0165b08c05d0b1ab0e1ec41d4544dc16dc7fe540c39da5c80e6826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86a1ac9f44c5afe2d77c2d309f66bc8a5b091fb97e6bbeb17db8c18ba38e2f30->leave($__internal_86a1ac9f44c5afe2d77c2d309f66bc8a5b091fb97e6bbeb17db8c18ba38e2f30_prof);

        
        $__internal_dd529743ed0165b08c05d0b1ab0e1ec41d4544dc16dc7fe540c39da5c80e6826->leave($__internal_dd529743ed0165b08c05d0b1ab0e1ec41d4544dc16dc7fe540c39da5c80e6826_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e43d9674496f3a36387659ac236abf5170983b7047ec648d3dba29dedc0e53e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43d9674496f3a36387659ac236abf5170983b7047ec648d3dba29dedc0e53e8->enter($__internal_e43d9674496f3a36387659ac236abf5170983b7047ec648d3dba29dedc0e53e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8b822bbaedd1013ba29f97f8fb5be68abf5086b5a635f4f1848824cf89d50e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b822bbaedd1013ba29f97f8fb5be68abf5086b5a635f4f1848824cf89d50e94->enter($__internal_8b822bbaedd1013ba29f97f8fb5be68abf5086b5a635f4f1848824cf89d50e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8b822bbaedd1013ba29f97f8fb5be68abf5086b5a635f4f1848824cf89d50e94->leave($__internal_8b822bbaedd1013ba29f97f8fb5be68abf5086b5a635f4f1848824cf89d50e94_prof);

        
        $__internal_e43d9674496f3a36387659ac236abf5170983b7047ec648d3dba29dedc0e53e8->leave($__internal_e43d9674496f3a36387659ac236abf5170983b7047ec648d3dba29dedc0e53e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Dylan/Check kW/log_user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
