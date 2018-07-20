<?php

/* C:\xampp\htdocs\acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_295271d889a05666093127b54e193920b41defd34ed73e91266163eacbf70059 extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
            <li class=\"";
        // line 15
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
            <li class=\"";
        // line 16
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a></li>
            <li class=\"";
        // line 17
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  53 => 16,  45 => 15,  37 => 14,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About</a></li>
            <li class=\"{% if this.page.id == 'blog' %}active{% endif %}\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>
            <li class=\"{% if this.page.id == 'contact' %}active{% endif %}\"><a href=\"{{ 'contact'|page }}\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm", "");
    }
}
