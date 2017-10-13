<?php

/* projectAdd.html.twig */
class __TwigTemplate_725da444fbc668ad8318c14c4539bdbc61ce0161f937f0205eb8a76bfb268928 extends Twig_Template
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
        $__internal_79d62b916cbaef1e546248d8b2ee00dab57f75bcd8e2b581a3edd2aafb2fd8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d62b916cbaef1e546248d8b2ee00dab57f75bcd8e2b581a3edd2aafb2fd8d3->enter($__internal_79d62b916cbaef1e546248d8b2ee00dab57f75bcd8e2b581a3edd2aafb2fd8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectAdd.html.twig"));

        $__internal_1842eca8a7f6d81cb66fb12f6d25743075796807b88be538893dd706c5c759b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1842eca8a7f6d81cb66fb12f6d25743075796807b88be538893dd706c5c759b8->enter($__internal_1842eca8a7f6d81cb66fb12f6d25743075796807b88be538893dd706c5c759b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectAdd.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Add a project</title>
</head>
<body>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <button type=\"submit\">Add project</button>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</body>
</html>";
        
        $__internal_79d62b916cbaef1e546248d8b2ee00dab57f75bcd8e2b581a3edd2aafb2fd8d3->leave($__internal_79d62b916cbaef1e546248d8b2ee00dab57f75bcd8e2b581a3edd2aafb2fd8d3_prof);

        
        $__internal_1842eca8a7f6d81cb66fb12f6d25743075796807b88be538893dd706c5c759b8->leave($__internal_1842eca8a7f6d81cb66fb12f6d25743075796807b88be538893dd706c5c759b8_prof);

    }

    public function getTemplateName()
    {
        return "projectAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  38 => 9,  34 => 8,  25 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Add a project</title>
</head>
<body>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <button type=\"submit\">Add project</button>
    {{ form_end(form) }}

</body>
</html>", "projectAdd.html.twig", "/Users/Dylan/Check kW/log_user/app/Resources/views/projectAdd.html.twig");
    }
}
