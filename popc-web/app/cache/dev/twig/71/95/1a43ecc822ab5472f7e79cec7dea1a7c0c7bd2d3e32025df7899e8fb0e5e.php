<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_71951a43ecc822ab5472f7e79cec7dea1a7c0c7bd2d3e32025df7899e8fb0e5e extends Twig_Template
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
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "    
    <div class=\"container\">     
 
          <div class=\"page-header\">
       
      
      <form class=\"form-signin\" role=\"form\" method=\"POST\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <label for=\"inputUsername\" class=\"sr-only\">Username</label>
        <input name=\"username\" type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"Username\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input name=\"password\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        <a class=\"btn btn-lg btn-info btn-block\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\">Sign up</a>
      </form>


    </div><!-- /Header -->

    </div> <!-- /container -->
    ";
        // line 32
        if (array_key_exists("name", $context)) {
            // line 33
            echo "    <div class=\"alert-info fade in\">
        <strong>Hello ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </strong>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 34,  72 => 33,  70 => 32,  60 => 25,  45 => 13,  37 => 7,  34 => 6,  29 => 3,);
    }
}
