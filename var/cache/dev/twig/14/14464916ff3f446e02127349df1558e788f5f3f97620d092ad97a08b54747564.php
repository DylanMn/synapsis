<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_05e3bfb1e35411d081e0e69a0aacaaf79087fbdb9c26917d5fed4d4915ccfe5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19ef06fa79f9b239116237e4fbd27669f178f4b77e2f1d9a616b49b0749a1df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ef06fa79f9b239116237e4fbd27669f178f4b77e2f1d9a616b49b0749a1df0->enter($__internal_19ef06fa79f9b239116237e4fbd27669f178f4b77e2f1d9a616b49b0749a1df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_57b3e9380516146d13fa04368befe57612324f233c11f77dd5f0b605bb3e5584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b3e9380516146d13fa04368befe57612324f233c11f77dd5f0b605bb3e5584->enter($__internal_57b3e9380516146d13fa04368befe57612324f233c11f77dd5f0b605bb3e5584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ef06fa79f9b239116237e4fbd27669f178f4b77e2f1d9a616b49b0749a1df0->leave($__internal_19ef06fa79f9b239116237e4fbd27669f178f4b77e2f1d9a616b49b0749a1df0_prof);

        
        $__internal_57b3e9380516146d13fa04368befe57612324f233c11f77dd5f0b605bb3e5584->leave($__internal_57b3e9380516146d13fa04368befe57612324f233c11f77dd5f0b605bb3e5584_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_521e081bfdbb8f83fa803b2a2c11f355071c485e8ef6906e39c40240fa8abd60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521e081bfdbb8f83fa803b2a2c11f355071c485e8ef6906e39c40240fa8abd60->enter($__internal_521e081bfdbb8f83fa803b2a2c11f355071c485e8ef6906e39c40240fa8abd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ccb8272aba9dbfb7c0c70cd992657ea6b96fea3043e27aade85310e052708af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccb8272aba9dbfb7c0c70cd992657ea6b96fea3043e27aade85310e052708af->enter($__internal_6ccb8272aba9dbfb7c0c70cd992657ea6b96fea3043e27aade85310e052708af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6ccb8272aba9dbfb7c0c70cd992657ea6b96fea3043e27aade85310e052708af->leave($__internal_6ccb8272aba9dbfb7c0c70cd992657ea6b96fea3043e27aade85310e052708af_prof);

        
        $__internal_521e081bfdbb8f83fa803b2a2c11f355071c485e8ef6906e39c40240fa8abd60->leave($__internal_521e081bfdbb8f83fa803b2a2c11f355071c485e8ef6906e39c40240fa8abd60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/Dylan/Check kW/log_user/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
