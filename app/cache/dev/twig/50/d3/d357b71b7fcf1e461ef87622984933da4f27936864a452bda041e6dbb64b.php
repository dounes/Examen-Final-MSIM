<?php

/* ToDoBundle:Tache:show.html.twig */
class __TwigTemplate_50d3d357b71b7fcf1e461ef87622984933da4f27936864a452bda041e6dbb64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Fredericka the Great|Belleza\">
    <div class=\"centre\">
       <center><h1>Todo.com</h1></center>
       <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo " :</h2> <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</p>
      
       <p>à faire avant le: </p> <h3>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d-m-Y / H:i:s"), "html", null, true);
        echo "</h3>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
           <img src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/n.png"), "html", null, true);
        echo ">
        </a>
    
     <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tache");
        echo "\">
             <img src=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/bacc.png"), "html", null, true);
        echo ">
     </a><br><br>
     <p style=\"float: bottom;\"> © CopyRight Younes Daoud</p> </div>
   
";
    }

    public function getTemplateName()
    {
        return "ToDoBundle:Tache:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  65 => 14,  59 => 11,  55 => 10,  51 => 9,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
