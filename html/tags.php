<?php
// Dependencies: html.php
//include "./html.php";
// Check if this script is included
function pht_html_tags_included(bool $p=true) {
 if ($p) {
  echo "<!--PHT_HTML_TAGS_IS_INCLUDED-->";
 }
 return true;
}

$doctype = "<!DOCTYPE html>";

// Comment
function comment(string $content){
	return "<!--" . $content . "-->";
}

// Document
function h_html(array $attr=[], $c=[]){
	return new E("html", $attr, $c);
}

function h_head(array $attr=[], $c=[]){
	return new E("head", $attr, $c);
}

function h_body(array $attr=[], $c=[]){
	return new E("body", $attr, $c);
}

// Basic Layout
function h_div(array $attr=[], $c=[]){
	return new E("div", $attr, $c);
}

function h_span(array $attr=[], $c=[]){
	return new E("span", $attr, $c);
}

// Basic
function h_p(array $attr=[], $c=[]){
	return new E("p", $attr, $c);
}

function h_h1(array $attr=[], $c=[]){
	return new E("h1", $attr, $c);
}

function h_h2(array $attr=[], $c=[]){
	return new E("h2", $attr, $c);
}

function h_h3(array $attr=[], $c=[]){
	return new E("h3", $attr, $c);
}

function h_h4(array $attr=[], $c=[]){
	return new E("h4", $attr, $c);
}

function h_h5(array $attr=[], $c=[]){
	return new E("h5", $attr, $c);
}

function h_h6(array $attr=[], $c=[]){
	return new E("h6", $attr, $c);
}

// Link
function h_a(array $attr=[], $c=[]){
	return new E("a", $attr, $c);
}

function h_link(array $attr=[], $c=[]){
	return new E("link", $attr, $c);
}

// Page
function h_header(array $attr=[], $c=[]){
	return new E("header", $attr, $c);
}

function h_nav(array $attr=[], $c=[]){
	return new E("nav", $attr, $c);
}

function h_main(array $attr=[], $c=[]){
	return new E("main", $attr, $c);
}

function h_section(array $attr=[], $c=[]){
	return new E("section", $attr, $c);
}

function h_article(array $attr=[], $c=[]){
	return new E("article", $attr, $c);
}

function h_aside(array $attr=[], $c=[]){
	return new E("aside", $attr, $c);
}

function h_footer(array $attr=[], $c=[]){
	return new E("footer", $attr, $c);
}

function h_details(array $attr=[], $c=[]){
	return new E("details", $attr, $c);
}
function h_summary(array $attr=[], $c=[]){
	return new E("summary", $attr, $c);
}

function h_dialog(array $attr=[], $c=[]){
	return new E("dialog", $attr, $c);
}

function h_data(array $attr=[], $c=[]){
	return new E("data", $attr, $c);
}

// Lists
function h_ul(array $attr=[], $c=[]){
	return new E("ul", $attr, $c);
}

function h_ol(array $attr=[], $c=[]){
	return new E("ol", $attr, $c);
}

function h_li(array $attr=[], $c=[]){
	return new E("li", $attr, $c);
}

function h_dl(array $attr=[], $c=[]){
	return new E("dl", $attr, $c);
}

function h_dt(array $attr=[], $c=[]){
	return new E("dt", $attr, $c);
}
function h_dd(array $attr=[], $c=[]){
	return new E("dd", $attr, $c);
}

// Table
function h_table(array $attr=[], $c=[]){
	return new E("table", $attr, $c);
}

function h_tr(array $attr=[], $c=[]){
	return new E("tr", $attr, $c);
}

function h_th(array $attr=[], $c=[]){
	return new E("th", $attr, $c);
}
function h_td(array $attr=[], $c=[]){
	return new E("td", $attr, $c);
}

function h_caption(array $attr=[], $c=[]){
	return new E("caption", $attr, $c);
}

function h_thead(array $attr=[], $c=[]){
	return new E("thead", $attr, $c);
}

function h_tbody(array $attr=[], $c=[]){
	return new E("tbody", $attr, $c);
}

function h_tfoot(array $attr=[], $c=[]){
	return new E("tfoot", $attr, $c);
}

function h_col(array $attr=[], $c=[]){
	return new E("col", $attr, $c);
}

function h_colgroup(array $attr=[], $c=[]){
	return new E("colgroup", $attr, $c);
}

// Image
function h_img(array $attr=[], $c=[]){
	return new E("img", $attr, $c);
}

function h_figure(array $attr=[], $c=[]){
	return new E("figure", $attr, $c);
}

function h_figcaption(array $attr=[], $c=[]){
	return new E("figcaption", $attr, $c);
}

function h_map(array $attr=[], $c=[]){
	return new E("map", $attr, $c);
}
function h_area(array $attr=[], $c=[]){
	return new E("area", $attr, $c);
}

function h_canvas(array $attr=[], $c=[]){
	return new E("canvas", $attr, $c);
}

function h_picture(array $attr=[], $c=[]){
	return new E("picture", $attr, $c);
}

function h_svg(array $attr=[], $c=[]){
	return new E("svg", $attr, $c);
}
// AV
function h_audio(array $attr=[], $c=[]){
	return new E("audio", $attr, $c);
}

function h_video(array $attr=[], $c=[]){
	return new E("video", $attr, $c);
}

function h_source(array $attr=[], $c=[]){
	return new E("source", $attr, $c);
}
function h_track(array $attr=[], $c=[]){
	return new E("track", $attr, $c);
}

// Frame
function h_iframe(array $attr=[], $c=[]){
	return new E("iframe", $attr, $c);
}

function h_embed(array $attr=[], $c=[]){
	return new E("embed", $attr, $c);
}

function h_object(array $attr=[], $c=[]){
	return new E("object", $attr, $c);
}
function h_param(array $attr=[], $c=[]){
	return new E("param", $attr, $c);
}

// Form
function h_form(array $attr=[], $c=[]){
	return new E("form", $attr, $c);
}

function h_label(array $attr=[], $c=[]){
	return new E("label", $attr, $c);
}

function h_input(array $attr=[], $c=[]){
	return new E("input", $attr, $c);
}

function h_button(array $attr=[], $c=[]){
	return new E("button", $attr, $c);
}

function h_textarea(array $attr=[], $c=[]){
	return new E("textarea", $attr, $c);
}

function h_select(array $attr=[], $c=[]){
	return new E("select", $attr, $c);
}
function h_optgroup(array $attr=[], $c=[]){
	return new E("optgroup", $attr, $c);
}

function h_option(array $attr=[], $c=[]){
	return new E("option", $attr, $c);
}

function h_fieldset(array $attr=[], $c=[]){
	return new E("fieldset", $attr, $c);
}

function h_legend(array $attr=[], $c=[]){
	return new E("legend", $attr, $c);
}
function h_datalist(array $attr=[], $c=[]){
	return new E("datalist", $attr, $c);
}

function h_output(array $attr=[], $c=[]){
	return new E("output", $attr, $c);
}

// Metadata
function h_title(array $attr=[], $c=[]){
	return new E("title", $attr, $c);
}

function h_meta(array $attr=[], $c=[]){
	return new E("meta", $attr, $c);
}

function h_base(array $attr=[], $c=[]){
	return new E("base", $attr, $c);
}

// Scripts
function h_noscript(array $attr=[], $c=[]){
	return new E("noscript", $attr, $c);
}

function h_script(array $attr=[], $c=[]){
	return new E("script", $attr, $c);
}

function h_style(array $attr=[], $c=[]){
	return new E("style", $attr, $c);
}

// Formatting
function h_pre(array $attr=[], $c=[]){
	return new E("pre", $attr, $c);
}

?>
