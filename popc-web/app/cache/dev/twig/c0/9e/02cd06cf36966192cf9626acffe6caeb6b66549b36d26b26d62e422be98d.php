<?php

/* LoginLoginBundle:Default:signup.html.twig */
class __TwigTemplate_c09e02cd06cf36966192cf9626acffe6caeb6b66549b36d26b26d62e422be98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        // line 8
        echo "
    <form class=\"form-signin\" role=\"form\" method=\"POST\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" data-parsley-validate>
        <h2 class=\"form-signin-heading\">Sign up for POPC</h2>
        <label for=\"inputUsername\" class=\"sr-only\">User name</label>
        <input name=\"username\" type=\"text\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Username\" required data-parsley-trigger=\"change\" autofocus>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input name=\"email\" type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required data-parsley-trigger=\"change\">
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input name=\"password\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required data-required=\"true\" data-trigger=\"change\">
        <label for=\"inputRePassword\" class=\"sr-only\">Re-type Password</label>
        <input name=\"re-password\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Re-type Password\" required data-required=\"true\" data-trigger=\"change\">
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign up</button>
      </form>
    
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
