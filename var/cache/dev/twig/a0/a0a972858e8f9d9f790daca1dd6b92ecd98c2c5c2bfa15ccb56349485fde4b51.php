<?php

/* projectList.html.twig */
class __TwigTemplate_52a7cc5a63500f61bd76d465ba4b9b1a949075a2acfce3c324ff9a391ad58fbc extends Twig_Template
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
        $__internal_2b5abfabb19a05171d1c4bd03eb1e94751c4d6e3b5e96c82b31751b9c42027da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5abfabb19a05171d1c4bd03eb1e94751c4d6e3b5e96c82b31751b9c42027da->enter($__internal_2b5abfabb19a05171d1c4bd03eb1e94751c4d6e3b5e96c82b31751b9c42027da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectList.html.twig"));

        $__internal_5529b6c160d4a0038d3dfe1077158ace73a98099114e00110da24e14ffa58dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5529b6c160d4a0038d3dfe1077158ace73a98099114e00110da24e14ffa58dcd->enter($__internal_5529b6c160d4a0038d3dfe1077158ace73a98099114e00110da24e14ffa58dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projectList.html.twig"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")));
        foreach ($context['_seq'] as $context["_key"] => $context["projects"]) {
            // line 9
            echo "
<h1>Project : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["projects"], "domain", array()), "html", null, true);
            echo "</h1>
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data", array("id" => $this->getAttribute($context["projects"], "id", array()))), "html", null, true);
            echo "\">Update</a>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projects'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<table>
    <tr>
        <th>Keyword</th>
        <th>Rank</th>
        <th>Change</th>
        <th>Date</th>
        <th>URL</th>
        <th>Evolution</th>
    </tr>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")));
        foreach ($context['_seq'] as $context["_key"] => $context["keywords"]) {
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["domainData"]) ? $context["domainData"] : $this->getContext($context, "domainData")));
            foreach ($context['_seq'] as $context["_key"] => $context["domainDatas"]) {
                // line 25
                echo "
    ";
                // line 26
                if (((($this->getAttribute($context["keywords"], "id", array()) == $this->getAttribute($context["domainDatas"], "keywordId", array())) && array_key_exists("previousDate", $context)) && (twig_date_format_filter($this->env, $this->getAttribute($context["domainDatas"], "day", array()), "d.m.y") == (isset($context["previousDate"]) ? $context["previousDate"] : $this->getContext($context, "previousDate"))))) {
                    // line 27
                    echo "        ";
                    $context["previousRank"] = $this->getAttribute($context["domainDatas"], "rank", array());
                    // line 28
                    echo "
    ";
                }
                // line 30
                echo "
    ";
                // line 31
                if ((($this->getAttribute($context["keywords"], "id", array()) == $this->getAttribute($context["domainDatas"], "keywordId", array())) && ((isset($context["actualDate"]) ? $context["actualDate"] : $this->getContext($context, "actualDate")) == twig_date_format_filter($this->env, $this->getAttribute($context["domainDatas"], "day", array()), "d.m.y")))) {
                    // line 32
                    echo "        <tr>
        <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["keywords"], "keyword", array()), "html", null, true);
                    echo " :</td>
        <td>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["domainDatas"], "rank", array()), "html", null, true);
                    echo "</td>
            ";
                    // line 35
                    if (array_key_exists("previousRank", $context)) {
                        // line 36
                        echo "            <td>";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["domainDatas"], "rank", array()) - (isset($context["previousRank"]) ? $context["previousRank"] : $this->getContext($context, "previousRank"))), "html", null, true);
                        echo "</td>
            ";
                    } else {
                        // line 38
                        echo "                <td>0</td>
            ";
                    }
                    // line 40
                    echo "        <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["domainDatas"], "day", array()), "d.m.Y"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["domainDatas"], "urlSerp", array()), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart", array("id" => $this->getAttribute($context["keywords"], "id", array()))), "html", null, true);
                    echo "\">Evolution</a></td>


        </tr>
    ";
                }
                // line 47
                echo "


";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domainDatas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keywords'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
</table>

     <br>



Add keyword(s)
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\">Add project</button>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</body>
</html>";
        
        $__internal_2b5abfabb19a05171d1c4bd03eb1e94751c4d6e3b5e96c82b31751b9c42027da->leave($__internal_2b5abfabb19a05171d1c4bd03eb1e94751c4d6e3b5e96c82b31751b9c42027da_prof);

        
        $__internal_5529b6c160d4a0038d3dfe1077158ace73a98099114e00110da24e14ffa58dcd->leave($__internal_5529b6c160d4a0038d3dfe1077158ace73a98099114e00110da24e14ffa58dcd_prof);

    }

    public function getTemplateName()
    {
        return "projectList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 63,  157 => 61,  153 => 60,  143 => 52,  130 => 47,  122 => 42,  118 => 41,  113 => 40,  109 => 38,  103 => 36,  101 => 35,  97 => 34,  93 => 33,  90 => 32,  88 => 31,  85 => 30,  81 => 28,  78 => 27,  76 => 26,  73 => 25,  69 => 24,  65 => 23,  54 => 14,  45 => 11,  41 => 10,  38 => 9,  34 => 8,  25 => 1,);
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
{% for projects in project %}

<h1>Project : {{ projects.domain }}</h1>
    <a href=\"{{ path('data', {'id': projects.id }) }}\">Update</a>

{% endfor %}
<table>
    <tr>
        <th>Keyword</th>
        <th>Rank</th>
        <th>Change</th>
        <th>Date</th>
        <th>URL</th>
        <th>Evolution</th>
    </tr>
{% for keywords in keyword %}
{% for domainDatas in domainData %}

    {% if keywords.id == domainDatas.keywordId and previousDate is defined and domainDatas.day|date('d.m.y') == previousDate %}
        {% set previousRank = domainDatas.rank %}

    {% endif %}

    {% if keywords.id == domainDatas.keywordId and actualDate == domainDatas.day|date('d.m.y')  %}
        <tr>
        <td>{{ keywords.keyword }} :</td>
        <td>{{ domainDatas.rank }}</td>
            {% if previousRank is defined %}
            <td>{{ domainDatas.rank - previousRank }}</td>
            {% else %}
                <td>0</td>
            {% endif %}
        <td>{{ domainDatas.day|date('d.m.Y') }}</td>
            <td>{{ domainDatas.urlSerp }}</td>
            <td><a href=\"{{ path('chart', {'id': keywords.id }) }}\">Evolution</a></td>


        </tr>
    {% endif %}



{% endfor %}
{% endfor %}

</table>

     <br>



Add keyword(s)
{{ form_start(form) }}
{{ form_widget(form) }}
<button type=\"submit\">Add project</button>
{{ form_end(form) }}
</body>
</html>", "projectList.html.twig", "/Users/Dylan/Check kW/log_user/app/Resources/views/projectList.html.twig");
    }
}
