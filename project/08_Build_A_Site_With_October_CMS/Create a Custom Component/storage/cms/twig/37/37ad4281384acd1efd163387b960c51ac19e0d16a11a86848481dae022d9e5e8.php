<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/contact.htm */
class __TwigTemplate_7eab322365a200c63d7c49fa85f2a4b73a9da85fd64c75af153b83bd66e590db extends Twig_Template
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
        echo "<h1>Contact Us</h1>
<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</buton>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/contact.htm";
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
        return new Twig_Source("<h1>Contact Us</h1>
<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</buton>
</form>", "C:\\xampp\\htdocs\\acme/themes/acme/pages/contact.htm", "");
    }
}
