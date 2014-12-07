<?php

/* LoginLoginBundle:Default:welcome.html.twig */
class __TwigTemplate_24ac9a080b7e9e332af8bedc454827854545b5d86440ac7e12ca9bec7a5d633b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    
    ";
        // line 5
        if (array_key_exists("name", $context)) {
            // line 6
            echo "    <div class=\"alert-info fade in\">
        <h1>Hello ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </h1>
        <strong>Hello ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </strong>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
