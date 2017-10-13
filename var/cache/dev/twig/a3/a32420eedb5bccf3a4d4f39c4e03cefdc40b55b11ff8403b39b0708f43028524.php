<?php

/* base.html.twig */
class __TwigTemplate_e95a1c63f9a2964fce97b31cc05dda8109fb3f129e758cc2041cb4a159fed274 extends Twig_Template
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
        $__internal_2a9381d4e0e6bcd35d0ce8f71e8cfb6af344f7d061bcdbd5b74a357e6ee2861f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9381d4e0e6bcd35d0ce8f71e8cfb6af344f7d061bcdbd5b74a357e6ee2861f->enter($__internal_2a9381d4e0e6bcd35d0ce8f71e8cfb6af344f7d061bcdbd5b74a357e6ee2861f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b1ac4e45777b8c98865f1c20f5a17d90282b8dc060d1269c6790dbd8d9fc844b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ac4e45777b8c98865f1c20f5a17d90282b8dc060d1269c6790dbd8d9fc844b->enter($__internal_b1ac4e45777b8c98865f1c20f5a17d90282b8dc060d1269c6790dbd8d9fc844b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_2a9381d4e0e6bcd35d0ce8f71e8cfb6af344f7d061bcdbd5b74a357e6ee2861f->leave($__internal_2a9381d4e0e6bcd35d0ce8f71e8cfb6af344f7d061bcdbd5b74a357e6ee2861f_prof);

        
        $__internal_b1ac4e45777b8c98865f1c20f5a17d90282b8dc060d1269c6790dbd8d9fc844b->leave($__internal_b1ac4e45777b8c98865f1c20f5a17d90282b8dc060d1269c6790dbd8d9fc844b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c85e8e05ff8aab2b1b2529d44a02ad3bd891e6cf9e71ff675cdabe5290ec1a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85e8e05ff8aab2b1b2529d44a02ad3bd891e6cf9e71ff675cdabe5290ec1a53->enter($__internal_c85e8e05ff8aab2b1b2529d44a02ad3bd891e6cf9e71ff675cdabe5290ec1a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bdd4a3813bcc5039a3a102e751a66925afd496164e0f03f94cb42833a9d0161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdd4a3813bcc5039a3a102e751a66925afd496164e0f03f94cb42833a9d0161->enter($__internal_6bdd4a3813bcc5039a3a102e751a66925afd496164e0f03f94cb42833a9d0161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6bdd4a3813bcc5039a3a102e751a66925afd496164e0f03f94cb42833a9d0161->leave($__internal_6bdd4a3813bcc5039a3a102e751a66925afd496164e0f03f94cb42833a9d0161_prof);

        
        $__internal_c85e8e05ff8aab2b1b2529d44a02ad3bd891e6cf9e71ff675cdabe5290ec1a53->leave($__internal_c85e8e05ff8aab2b1b2529d44a02ad3bd891e6cf9e71ff675cdabe5290ec1a53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97f853e10746d373bd0755b420cbc10e62d58709bc6391bed7d61c3b80c9497e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f853e10746d373bd0755b420cbc10e62d58709bc6391bed7d61c3b80c9497e->enter($__internal_97f853e10746d373bd0755b420cbc10e62d58709bc6391bed7d61c3b80c9497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0286f68665db76e8584ddad4bf065783be1040c1cef15eae2bf0675c7bff05d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0286f68665db76e8584ddad4bf065783be1040c1cef15eae2bf0675c7bff05d1->enter($__internal_0286f68665db76e8584ddad4bf065783be1040c1cef15eae2bf0675c7bff05d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0286f68665db76e8584ddad4bf065783be1040c1cef15eae2bf0675c7bff05d1->leave($__internal_0286f68665db76e8584ddad4bf065783be1040c1cef15eae2bf0675c7bff05d1_prof);

        
        $__internal_97f853e10746d373bd0755b420cbc10e62d58709bc6391bed7d61c3b80c9497e->leave($__internal_97f853e10746d373bd0755b420cbc10e62d58709bc6391bed7d61c3b80c9497e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a205f3cdb8c20ca463b588ce360a85f3b91dcd1b7fdeedb3c6e5047ee5eb16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a205f3cdb8c20ca463b588ce360a85f3b91dcd1b7fdeedb3c6e5047ee5eb16e->enter($__internal_8a205f3cdb8c20ca463b588ce360a85f3b91dcd1b7fdeedb3c6e5047ee5eb16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bacf52b5b9fae5fa61e04648f5f0122b7f2c1f1a6d72f55eb16302d260803b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bacf52b5b9fae5fa61e04648f5f0122b7f2c1f1a6d72f55eb16302d260803b8->enter($__internal_1bacf52b5b9fae5fa61e04648f5f0122b7f2c1f1a6d72f55eb16302d260803b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "        ";
        
        $__internal_1bacf52b5b9fae5fa61e04648f5f0122b7f2c1f1a6d72f55eb16302d260803b8->leave($__internal_1bacf52b5b9fae5fa61e04648f5f0122b7f2c1f1a6d72f55eb16302d260803b8_prof);

        
        $__internal_8a205f3cdb8c20ca463b588ce360a85f3b91dcd1b7fdeedb3c6e5047ee5eb16e->leave($__internal_8a205f3cdb8c20ca463b588ce360a85f3b91dcd1b7fdeedb3c6e5047ee5eb16e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2414ad4588a2c9524971a9ede655dd3cfdada55fffe8dfe139bae4a427a510c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2414ad4588a2c9524971a9ede655dd3cfdada55fffe8dfe139bae4a427a510c1->enter($__internal_2414ad4588a2c9524971a9ede655dd3cfdada55fffe8dfe139bae4a427a510c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d7b77b4c52f895dc3b95c5baf2c229ffa81efd6851fda309f0b9733267885a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7b77b4c52f895dc3b95c5baf2c229ffa81efd6851fda309f0b9733267885a1->enter($__internal_2d7b77b4c52f895dc3b95c5baf2c229ffa81efd6851fda309f0b9733267885a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2d7b77b4c52f895dc3b95c5baf2c229ffa81efd6851fda309f0b9733267885a1->leave($__internal_2d7b77b4c52f895dc3b95c5baf2c229ffa81efd6851fda309f0b9733267885a1_prof);

        
        $__internal_2414ad4588a2c9524971a9ede655dd3cfdada55fffe8dfe139bae4a427a510c1->leave($__internal_2414ad4588a2c9524971a9ede655dd3cfdada55fffe8dfe139bae4a427a510c1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 12,  109 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 13,  50 => 12,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Dylan/Check kW/log_user/app/Resources/views/base.html.twig");
    }
}
