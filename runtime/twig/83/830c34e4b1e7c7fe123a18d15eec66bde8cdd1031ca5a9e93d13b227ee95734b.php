<?php

/* contact/contact.html */
class __TwigTemplate_d62c45d4217986d1ddc1a9c278ddb9ec319402a7ce2542118596499f97dd4d5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "contact/contact.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "public/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"main\">
    <div class=\"main1\">
      <div class=\"section group1\">
        <div class=\"col span_1_of_3\">
          <div class=\"contact_info\">
            <h3>Find Us Here</h3>
            <div class=\"map\" title=\"map\">
              <iframe width=\"100%\" height=\"175\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"\" style=\"background-color: darkgrey;\"></iframe>
              <br>
              <small><a href=\"https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265\" style=\"color: #5A5A5A;text-align:left;font-size:12px\">View Larger Map</a></small> </div>
          </div>
          <div class=\"company_address\">
            <h3>Company Info :</h3>
            <p>500 Lorem Ipsum Dolor Sit,</p>
            <p>22-56-2-9 Sit Amet, Lorem,</p>
            <p>USA</p>
            <p>Phone:(00) 222 666 444</p>
            <p>Fax: (000) 000 00 00 0</p>
            <p>Email: <span>info(at)mycompany.com</span></p>
            <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
          </div>
        </div>
        <div class=\"col span_2_of_3\">
          <div class=\"contact-form\">
            <h3>Contact Us</h3>
            <form method=\"post\" action=\"contact-post.html\">
              <div> <span>
                <label>NAME</label>
                </span> <span>
                <input name=\"userName\" type=\"text\" class=\"textbox\">
                </span> </div>
              <div> <span>
                <label>E-MAIL</label>
                </span> <span>
                <input name=\"userEmail\" type=\"text\" class=\"textbox\">
                </span> </div>
              <div> <span>
                <label>MOBILE</label>
                </span> <span>
                <input name=\"userPhone\" type=\"text\" class=\"textbox\">
                </span> </div>
              <div> <span>
                <label>SUBJECT</label>
                </span> <span>
                <textarea name=\"userMsg\"> </textarea>
                </span> </div>
              <div> <span>
                <input type=\"submit\" value=\"Send me\">
                </span> </div>
            </form>
          </div>
        </div>
        <div class=\"clear\"></div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "contact/contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"public/base.html\" %}

{% block content %}
  <div class=\"main\">
    <div class=\"main1\">
      <div class=\"section group1\">
        <div class=\"col span_1_of_3\">
          <div class=\"contact_info\">
            <h3>Find Us Here</h3>
            <div class=\"map\" title=\"map\">
              <iframe width=\"100%\" height=\"175\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"\" style=\"background-color: darkgrey;\"></iframe>
              <br>
              <small><a href=\"https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265\" style=\"color: #5A5A5A;text-align:left;font-size:12px\">View Larger Map</a></small> </div>
          </div>
          <div class=\"company_address\">
            <h3>Company Info :</h3>
            <p>500 Lorem Ipsum Dolor Sit,</p>
            <p>22-56-2-9 Sit Amet, Lorem,</p>
            <p>USA</p>
            <p>Phone:(00) 222 666 444</p>
            <p>Fax: (000) 000 00 00 0</p>
            <p>Email: <span>info(at)mycompany.com</span></p>
            <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
          </div>
        </div>
        <div class=\"col span_2_of_3\">
          <div class=\"contact-form\">
            <h3>Contact Us</h3>
            <form method=\"post\" action=\"contact-post.html\">
              <div> <span>
                <label>NAME</label>
                </span> <span>
                <input name=\"userName\" type=\"text\" class=\"textbox\">
                </span> </div>
              <div> <span>
                <label>E-MAIL</label>
                </span> <span>
                <input name=\"userEmail\" type=\"text\" class=\"textbox\">
                </span> </div>
              <div> <span>
                <label>MOBILE</label>
                </span> <span>
                <input name=\"userPhone\" type=\"text\" class=\"textbox\">
                </span> </div>
              <div> <span>
                <label>SUBJECT</label>
                </span> <span>
                <textarea name=\"userMsg\"> </textarea>
                </span> </div>
              <div> <span>
                <input type=\"submit\" value=\"Send me\">
                </span> </div>
            </form>
          </div>
        </div>
        <div class=\"clear\"></div>
      </div>
    </div>
  </div>
{% endblock %}", "contact/contact.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/contact/contact.html");
    }
}
