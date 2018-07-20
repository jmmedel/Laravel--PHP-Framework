<?php

/* C:\xampp\htdocs\acme/themes/acme/partials/site/footer.htm */
class __TwigTemplate_42b2af7c896747f01629bf29d4d1cbbae0892f7fd772ab024c00482f6cb7b00b extends Twig_Template
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
        echo "<p class=\"text-center\">Copyright &copy; 2017 Acme Services</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"text-center\">Copyright &copy; 2017 Acme Services</p>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/footer.htm", "");
    }
}
