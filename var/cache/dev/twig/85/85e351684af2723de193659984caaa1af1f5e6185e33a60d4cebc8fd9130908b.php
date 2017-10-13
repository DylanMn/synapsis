<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b11e9af45c6a99c77fa53bd4bd442b048470c31d8b9335d1eb8bc7991824cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c2be07c197995ba12fdaa62b1f3a8bd71893bd4e58599c420854ebf2a12b9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2be07c197995ba12fdaa62b1f3a8bd71893bd4e58599c420854ebf2a12b9ac->enter($__internal_2c2be07c197995ba12fdaa62b1f3a8bd71893bd4e58599c420854ebf2a12b9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_daa960560aa39bd468a2f8883110e03c69308496d74877dd77f01dfcadb4b1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa960560aa39bd468a2f8883110e03c69308496d74877dd77f01dfcadb4b1c0->enter($__internal_daa960560aa39bd468a2f8883110e03c69308496d74877dd77f01dfcadb4b1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c2be07c197995ba12fdaa62b1f3a8bd71893bd4e58599c420854ebf2a12b9ac->leave($__internal_2c2be07c197995ba12fdaa62b1f3a8bd71893bd4e58599c420854ebf2a12b9ac_prof);

        
        $__internal_daa960560aa39bd468a2f8883110e03c69308496d74877dd77f01dfcadb4b1c0->leave($__internal_daa960560aa39bd468a2f8883110e03c69308496d74877dd77f01dfcadb4b1c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2b61f6a44a8977a7a3043b18b0fa4acbf744ad2d4e2f6c1524b3394413ce87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b61f6a44a8977a7a3043b18b0fa4acbf744ad2d4e2f6c1524b3394413ce87b->enter($__internal_e2b61f6a44a8977a7a3043b18b0fa4acbf744ad2d4e2f6c1524b3394413ce87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6764c6dfde025de063afc01a1b88c5178b9efcfd261196759a4d2457959767c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6764c6dfde025de063afc01a1b88c5178b9efcfd261196759a4d2457959767c2->enter($__internal_6764c6dfde025de063afc01a1b88c5178b9efcfd261196759a4d2457959767c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6764c6dfde025de063afc01a1b88c5178b9efcfd261196759a4d2457959767c2->leave($__internal_6764c6dfde025de063afc01a1b88c5178b9efcfd261196759a4d2457959767c2_prof);

        
        $__internal_e2b61f6a44a8977a7a3043b18b0fa4acbf744ad2d4e2f6c1524b3394413ce87b->leave($__internal_e2b61f6a44a8977a7a3043b18b0fa4acbf744ad2d4e2f6c1524b3394413ce87b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dab7966b4b3a1d3918ff9601ed4e1b0bae7ae27884b66cca27950eea9acbc5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dab7966b4b3a1d3918ff9601ed4e1b0bae7ae27884b66cca27950eea9acbc5c->enter($__internal_6dab7966b4b3a1d3918ff9601ed4e1b0bae7ae27884b66cca27950eea9acbc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be7c78352757701f8a8fff6f92ce704a1820abaa0fa8522976a459643f1af773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7c78352757701f8a8fff6f92ce704a1820abaa0fa8522976a459643f1af773->enter($__internal_be7c78352757701f8a8fff6f92ce704a1820abaa0fa8522976a459643f1af773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be7c78352757701f8a8fff6f92ce704a1820abaa0fa8522976a459643f1af773->leave($__internal_be7c78352757701f8a8fff6f92ce704a1820abaa0fa8522976a459643f1af773_prof);

        
        $__internal_6dab7966b4b3a1d3918ff9601ed4e1b0bae7ae27884b66cca27950eea9acbc5c->leave($__internal_6dab7966b4b3a1d3918ff9601ed4e1b0bae7ae27884b66cca27950eea9acbc5c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e968ff4aa076ef6f614576edce7d5c18279d9fb75fca46a6278f8ddd80a8374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e968ff4aa076ef6f614576edce7d5c18279d9fb75fca46a6278f8ddd80a8374->enter($__internal_5e968ff4aa076ef6f614576edce7d5c18279d9fb75fca46a6278f8ddd80a8374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e47e9934a8b3d58e649edf7f2576ff9573d2f31129fb4fa6ef56e8217c6bcfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47e9934a8b3d58e649edf7f2576ff9573d2f31129fb4fa6ef56e8217c6bcfab->enter($__internal_e47e9934a8b3d58e649edf7f2576ff9573d2f31129fb4fa6ef56e8217c6bcfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e47e9934a8b3d58e649edf7f2576ff9573d2f31129fb4fa6ef56e8217c6bcfab->leave($__internal_e47e9934a8b3d58e649edf7f2576ff9573d2f31129fb4fa6ef56e8217c6bcfab_prof);

        
        $__internal_5e968ff4aa076ef6f614576edce7d5c18279d9fb75fca46a6278f8ddd80a8374->leave($__internal_5e968ff4aa076ef6f614576edce7d5c18279d9fb75fca46a6278f8ddd80a8374_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Dylan/Check kW/log_user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
