var title = $('title');
var person_name = $('h1.person_name').text();

title.text('Currículo - ' + person_name);

var linkedin_link = $('.linkedin_link');
var site_link = $('.site_link');

linkedin_link.attr('href', linkedin_link.text());
site_link.attr('href', site_link.text());

var tag = `<br>`;
var skills = $('#skills').text().replace(/[ ]+/g, tag);

$('#skills').html(skills);