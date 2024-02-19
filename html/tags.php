<?php
// Dependencies: html.php
//include_once "html.php";
// Check if this script is included
$PHT_HTML_TAGS_INCLUDED = "<!--PHT_HTML_TAGS_IS_INCLUDED-->";

$doctype = "<!DOCTYPE html>";

// Comment
function comment(string $content){
	return "<!--" . $content . "-->";
}

// Document
function h_html(array $attr=[], $s="", $c=[]){
	return new H("html", $attr, $s, $c);
}

function h_head(array $attr=[], $s="", $c=[]){
	return new H("head", $attr, $s, $c);
}

function h_body(array $attr=[], $s="", $c=[]){
	return new H("body", $attr, $s, $c);
}

// Basic Layout
function h_div(array $attr=[], $s="", $c=[]){
	return new H("div", $attr, $s, $c);
}

function h_span(array $attr=[], $s="", $c=[]){
	return new H("span", $attr, $s, $c);
}

// Basic
function h_p(array $attr=[], $s="", $c=[]){
	return new H("p", $attr, $s, $c);
}

function h_h1(array $attr=[], $s="", $c=[]){
	return new H("h1", $attr, $s, $c);
}

function h_h2(array $attr=[], $s="", $c=[]){
	return new H("h2", $attr, $s, $c);
}

function h_h3(array $attr=[], $s="", $c=[]){
	return new H("h3", $attr, $s, $c);
}

function h_h4(array $attr=[], $s="", $c=[]){
	return new H("h4", $attr, $s, $c);
}

function h_h5(array $attr=[], $s="", $c=[]){
	return new H("h5", $attr, $s, $c);
}

function h_h6(array $attr=[], $s="", $c=[]){
	return new H("h6", $attr, $s, $c);
}

// Link
function h_a(array $attr=[], $s="", $c=[]){
	return new H("a", $attr, $s, $c);
}

function h_link(array $attr=[], $s="", $c=[]){
	return new H("link", $attr, $s, $c);
}

// Page
function h_header(array $attr=[], $s="", $c=[]){
	return new H("header", $attr, $s, $c);
}

function h_nav(array $attr=[], $s="", $c=[]){
	return new H("nav", $attr, $s, $c);
}

function h_main(array $attr=[], $s="", $c=[]){
	return new H("main", $attr, $s, $c);
}

function h_section(array $attr=[], $s="", $c=[]){
	return new H("section", $attr, $s, $c);
}

function h_article(array $attr=[], $s="", $c=[]){
	return new H("article", $attr, $s, $c);
}

function h_aside(array $attr=[], $s="", $c=[]){
	return new H("aside", $attr, $s, $c);
}

function h_footer(array $attr=[], $s="", $c=[]){
	return new H("footer", $attr, $s, $c);
}

function h_details(array $attr=[], $s="", $c=[]){
	return new H("details", $attr, $s, $c);
}
function h_summary(array $attr=[], $s="", $c=[]){
	return new H("summary", $attr, $s, $c);
}

function h_dialog(array $attr=[], $s="", $c=[]){
	return new H("dialog", $attr, $s, $c);
}

function h_data(array $attr=[], $s="", $c=[]){
	return new H("data", $attr, $s, $c);
}

// Lists
function h_ul(array $attr=[], $s="", $c=[]){
	return new H("ul", $attr, $s, $c);
}

function h_ol(array $attr=[], $s="", $c=[]){
	return new H("ol", $attr, $s, $c);
}

function h_li(array $attr=[], $s="", $c=[]){
	return new H("li", $attr, $s, $c);
}

function h_dl(array $attr=[], $s="", $c=[]){
	return new H("dl", $attr, $s, $c);
}

function h_dt(array $attr=[], $s="", $c=[]){
	return new H("dt", $attr, $s, $c);
}
function h_dd(array $attr=[], $s="", $c=[]){
	return new H("dd", $attr, $s, $c);
}

// Table
function h_table(array $attr=[], $s="", $c=[]){
	return new H("table", $attr, $s, $c);
}

function h_tr(array $attr=[], $s="", $c=[]){
	return new H("tr", $attr, $s, $c);
}

function h_th(array $attr=[], $s="", $c=[]){
	return new H("th", $attr, $s, $c);
}
function h_td(array $attr=[], $s="", $c=[]){
	return new H("td", $attr, $s, $c);
}

function h_caption(array $attr=[], $s="", $c=[]){
	return new H("caption", $attr, $s, $c);
}

function h_thead(array $attr=[], $s="", $c=[]){
	return new H("thead", $attr, $s, $c);
}

function h_tbody(array $attr=[], $s="", $c=[]){
	return new H("tbody", $attr, $s, $c);
}

function h_tfoot(array $attr=[], $s="", $c=[]){
	return new H("tfoot", $attr, $s, $c);
}

function h_col(array $attr=[], $s="", $c=[]){
	return new H("col", $attr, $s, $c);
}

function h_colgroup(array $attr=[], $s="", $c=[]){
	return new H("colgroup", $attr, $s, $c);
}

// Image
function h_img(array $attr=[], $s="", $c=[]){
	return new H("img", $attr, $s, $c);
}

function h_figure(array $attr=[], $s="", $c=[]){
	return new H("figure", $attr, $s, $c);
}

function h_figcaption(array $attr=[], $s="", $c=[]){
	return new H("figcaption", $attr, $s, $c);
}

function h_map(array $attr=[], $s="", $c=[]){
	return new H("map", $attr, $s, $c);
}
function h_area(array $attr=[], $s="", $c=[]){
	return new H("area", $attr, $s, $c);
}

function h_canvas(array $attr=[], $s="", $c=[]){
	return new H("canvas", $attr, $s, $c);
}

function h_picture(array $attr=[], $s="", $c=[]){
	return new H("picture", $attr, $s, $c);
}

function h_svg(array $attr=[], $s="", $c=[]){
	return new H("svg", $attr, $s, $c);
}
// AV
function h_audio(array $attr=[], $s="", $c=[]){
	return new H("audio", $attr, $s, $c);
}

function h_video(array $attr=[], $s="", $c=[]){
	return new H("video", $attr, $s, $c);
}

function h_source(array $attr=[], $s="", $c=[]){
	return new H("source", $attr, $s, $c);
}
function h_track(array $attr=[], $s="", $c=[]){
	return new H("track", $attr, $s, $c);
}

// Frame
function h_iframe(array $attr=[], $s="", $c=[]){
	return new H("iframe", $attr, $s, $c);
}

function h_embed(array $attr=[], $s="", $c=[]){
	return new H("embed", $attr, $s, $c);
}

function h_object(array $attr=[], $s="", $c=[]){
	return new H("object", $attr, $s, $c);
}
function h_param(array $attr=[], $s="", $c=[]){
	return new H("param", $attr, $s, $c);
}

// Form
function h_form(array $attr=[], $s="", $c=[]){
	return new H("form", $attr, $s, $c);
}

function h_label(array $attr=[], $s="", $c=[]){
	return new H("label", $attr, $s, $c);
}

function h_input(array $attr=[], $s="", $c=[]){
	return new H("input", $attr, $s, $c);
}

function h_button(array $attr=[], $s="", $c=[]){
	return new H("button", $attr, $s, $c);
}

function h_textarea(array $attr=[], $s="", $c=[]){
	return new H("textarea", $attr, $s, $c);
}

function h_select(array $attr=[], $s="", $c=[]){
	return new H("select", $attr, $s, $c);
}
function h_optgroup(array $attr=[], $s="", $c=[]){
	return new H("optgroup", $attr, $s, $c);
}

function h_option(array $attr=[], $s="", $c=[]){
	return new H("option", $attr, $s, $c);
}

function h_fieldset(array $attr=[], $s="", $c=[]){
	return new H("fieldset", $attr, $s, $c);
}

function h_legend(array $attr=[], $s="", $c=[]){
	return new H("legend", $attr, $s, $c);
}
function h_datalist(array $attr=[], $s="", $c=[]){
	return new H("datalist", $attr, $s, $c);
}

function h_output(array $attr=[], $s="", $c=[]){
	return new H("output", $attr, $s, $c);
}

// Metadata
function h_title(array $attr=[], $s="", $c=[]){
	return new H("title", $attr, $s, $c);
}

function h_meta(array $attr=[], $s="", $c=[]){
	return new H("meta", $attr, $s, $c);
}

function h_base(array $attr=[], $s="", $c=[]){
	return new H("base", $attr, $s, $c);
}

// Scripts
function h_noscript(array $attr=[], $s="", $c=[]){
	return new H("noscript", $attr, $s, $c);
}

function h_script(array $attr=[], $s="", $c=[]){
	return new H("script", $attr, $s, $c);
}

function h_style(array $attr=[], $s="", $c=[]){
	return new H("style", $attr, $s, $c);
}

// Formatting
function h_pre(array $attr=[], $s="", $c=[]){
	return new H("pre", $attr, $s, $c);
}

?>
