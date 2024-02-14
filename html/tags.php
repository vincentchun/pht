<?php
// Dependencies: html.php

$doctype = "<!DOCTYPE html>";

// Comment
function comment(string $content){
	return "<!--" . $content . "-->";
}

// Document
function h_html(array $attr=[], $c=[]){
	return new El("html", $attr, $c);
}

function h_head(array $attr=[], $c=[]){
	return new El("head", $attr, $c);
}

function h_body(array $attr=[], $c=[]){
	return new El("body", $attr, $c);
}

// Basic Layout
function h_div(array $attr=[], $c=[]){
	return new El("div", $attr, $c);
}

function h_span(array $attr=[], $c=[]){
	return new El("span", $attr, $c);
}

// Basic
function h_p(array $attr=[], $c=[]){
	return new El("p", $attr, $c);
}

function h_h1(array $attr=[], $c=[]){
	return new El("h1", $attr, $c);
}

function h_h2(array $attr=[], $c=[]){
	return new El("h2", $attr, $c);
}

function h_h3(array $attr=[], $c=[]){
	return new El("h3", $attr, $c);
}

function h_h4(array $attr=[], $c=[]){
	return new El("h4", $attr, $c);
}

function h_h5(array $attr=[], $c=[]){
	return new El("h5", $attr, $c);
}

function h_h6(array $attr=[], $c=[]){
	return new El("h6", $attr, $c);
}

// Link
function h_a(array $attr=[], $c=[]){
	return new El("a", $attr, $c);
}

function h_link(array $attr=[], $c=[]){
	return new El("link", $attr, $c);
}

// Page
function h_header(array $attr=[], $c=[]){
	return new El("header", $attr, $c);
}

function h_nav(array $attr=[], $c=[]){
	return new El("nav", $attr, $c);
}

function h_main(array $attr=[], $c=[]){
	return new El("main", $attr, $c);
}

function h_section(array $attr=[], $c=[]){
	return new El("section", $attr, $c);
}

function h_article(array $attr=[], $c=[]){
	return new El("article", $attr, $c);
}

function h_aside(array $attr=[], $c=[]){
	return new El("aside", $attr, $c);
}

function h_footer(array $attr=[], $c=[]){
	return new El("footer", $attr, $c);
}

function h_details(array $attr=[], $c=[]){
	return new El("details", $attr, $c);
}
function h_summary(array $attr=[], $c=[]){
	return new El("summary", $attr, $c);
}

function h_dialog(array $attr=[], $c=[]){
	return new El("dialog", $attr, $c);
}

function h_data(array $attr=[], $c=[]){
	return new El("data", $attr, $c);
}

// Lists
function h_ul(array $attr=[], $c=[]){
	return new El("ul", $attr, $c);
}

function h_ol(array $attr=[], $c=[]){
	return new El("ol", $attr, $c);
}

function h_li(array $attr=[], $c=[]){
	return new El("li", $attr, $c);
}

function h_dl(array $attr=[], $c=[]){
	return new El("dl", $attr, $c);
}

function h_dt(array $attr=[], $c=[]){
	return new El("dt", $attr, $c);
}
function h_dd(array $attr=[], $c=[]){
	return new El("dd", $attr, $c);
}

// Table
function h_table(array $attr=[], $c=[]){
	return new El("table", $attr, $c);
}

function h_tr(array $attr=[], $c=[]){
	return new El("tr", $attr, $c);
}

function h_th(array $attr=[], $c=[]){
	return new El("th", $attr, $c);
}
function h_td(array $attr=[], $c=[]){
	return new El("td", $attr, $c);
}

function h_caption(array $attr=[], $c=[]){
	return new El("caption", $attr, $c);
}

function h_thead(array $attr=[], $c=[]){
	return new El("thead", $attr, $c);
}

function h_tbody(array $attr=[], $c=[]){
	return new El("tbody", $attr, $c);
}

function h_tfoot(array $attr=[], $c=[]){
	return new El("tfoot", $attr, $c);
}

function h_col(array $attr=[], $c=[]){
	return new El("col", $attr, $c);
}

function h_colgroup(array $attr=[], $c=[]){
	return new El("colgroup", $attr, $c);
}

// Image
function h_img(array $attr=[], $c=[]){
	return new El("img", $attr, $c);
}

function h_figure(array $attr=[], $c=[]){
	return new El("figure", $attr, $c);
}

function h_figcaption(array $attr=[], $c=[]){
	return new El("figcaption", $attr, $c);
}

function h_map(array $attr=[], $c=[]){
	return new El("map", $attr, $c);
}
function h_area(array $attr=[], $c=[]){
	return new El("area", $attr, $c);
}

function h_canvas(array $attr=[], $c=[]){
	return new El("canvas", $attr, $c);
}

function h_picture(array $attr=[], $c=[]){
	return new El("picture", $attr, $c);
}

function h_svg(array $attr=[], $c=[]){
	return new El("svg", $attr, $c);
}
// AV
function h_audio(array $attr=[], $c=[]){
	return new El("audio", $attr, $c);
}

function h_video(array $attr=[], $c=[]){
	return new El("video", $attr, $c);
}

function h_source(array $attr=[], $c=[]){
	return new El("source", $attr, $c);
}
function h_track(array $attr=[], $c=[]){
	return new El("track", $attr, $c);
}

// Frame
function h_iframe(array $attr=[], $c=[]){
	return new El("iframe", $attr, $c);
}

function h_embed(array $attr=[], $c=[]){
	return new El("embed", $attr, $c);
}

function h_object(array $attr=[], $c=[]){
	return new El("object", $attr, $c);
}
function h_param(array $attr=[], $c=[]){
	return new El("param", $attr, $c);
}

// Form
function h_form(array $attr=[], $c=[]){
	return new El("form", $attr, $c);
}

function h_label(array $attr=[], $c=[]){
	return new El("label", $attr, $c);
}

function h_input(array $attr=[], $c=[]){
	return new El("input", $attr, $c);
}

function h_button(array $attr=[], $c=[]){
	return new El("button", $attr, $c);
}

function h_textarea(array $attr=[], $c=[]){
	return new El("textarea", $attr, $c);
}

function h_select(array $attr=[], $c=[]){
	return new El("select", $attr, $c);
}
function h_optgroup(array $attr=[], $c=[]){
	return new El("optgroup", $attr, $c);
}

function h_option(array $attr=[], $c=[]){
	return new El("option", $attr, $c);
}

function h_fieldset(array $attr=[], $c=[]){
	return new El("fieldset", $attr, $c);
}

function h_legend(array $attr=[], $c=[]){
	return new El("legend", $attr, $c);
}
function h_datalist(array $attr=[], $c=[]){
	return new El("datalist", $attr, $c);
}

function h_output(array $attr=[], $c=[]){
	return new El("output", $attr, $c);
}

// Metadata
function h_title(array $attr=[], $c=[]){
	return new El("title", $attr, $c);
}

function h_meta(array $attr=[], $c=[]){
	return new El("meta", $attr, $c);
}

function h_base(array $attr=[], $c=[]){
	return new El("base", $attr, $c);
}

// Scripts
function h_noscript(array $attr=[], $c=[]){
	return new El("noscript", $attr, $c);
}

function h_script(array $attr=[], $c=[]){
	return new El("script", $attr, $c);
}

function h_style(array $attr=[], $c=[]){
	return new El("style", $attr, $c);
}

// Formatting
function h_pre(array $attr=[], $c=[]){
	return new El("pre", $attr, $c);
}

?>
