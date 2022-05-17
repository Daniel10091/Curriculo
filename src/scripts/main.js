var inputs_container = $('.inputs_container');
var fname_input = $('.fname_input');
var lname_input = $('.lname_input');
var email_input = $('.email_input');
var tel_input = $('.tel_input');
var phone_input = $('.phone_input');
var address_input = $('.address_input');
var personal_profile_input = $('.personal_profile_input');
var image_profile_input = $('.image_profile_input');
var linkedin_input = $('.linkedin_input');
var site_input = $('.site_input');
var education_input = $('.education_input');
var office_input = $('.office_input');
var skills_input = $('.skills_input');
var experience_input = $('.experience_input');

$(document).on('click', '.submit', function (e) {
  if (fname_input.val() !== '') {
    fname_input.parent().removeClass('alert-undefined');
    if (lname_input.val() !== '') {
      lname_input.parent().removeClass('alert-undefined');
      if (email_input.val() !== '') {
        email_input.parent().removeClass('alert-undefined');
        var emailaddress = email_input.val();
        function isValidEmailAddress( emailAddress ) {
          var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
          return pattern.test( emailAddress );
        }
        if (!isValidEmailAddress( emailaddress )) {
          email_input.parent().addClass('alert-undefined');
          email_input.focus();
        } else {
          if (tel_input.val() !== '') {
            tel_input.parent().removeClass('alert-undefined');
            if (phone_input.val() !== '') {
              phone_input.parent().removeClass('alert-undefined');
              if (address_input.val() !== '') {
                address_input.parent().removeClass('alert-undefined');
                if (image_profile_input.val() !== '') {
                  image_profile_input.parent().removeClass('alert-undefined');
                  if (personal_profile_input.val() !== '') {
                    personal_profile_input.parent().removeClass('alert-undefined');
                    if (linkedin_input.val() !== '') {
                      linkedin_input.parent().removeClass('alert-undefined');
                      var linkedinval = linkedin_input.val();
                      function isValidEmailAddress( linkedinval ) {
                        var pattern = /.+\/\/[A-z0-9:.]+(\/)?$/;
                        return pattern.test(linkedinval);
                      }
                      if (!isValidEmailAddress( linkedinval )) {
                        linkedin_input.parent().addClass('alert-undefined');
                        linkedin_input.focus();
                      } else {
                        if (site_input.val() !== '') {
                          site_input.parent().removeClass('alert-undefined');
                          if (education_input.val() !== '') {
                            education_input.parent().removeClass('alert-undefined');
                            if (office_input.val() !== '') {
                              office_input.parent().removeClass('alert-undefined');
                              if (skills_input.val() !== '') {
                                skills_input.parent().removeClass('alert-undefined');
                                if (experience_input.val() !== '') {
                                  experience_input.parent().removeClass('alert-undefined');
                                } else {
                                  e.preventDefault();
                                  experience_input.parent().addClass('alert-undefined');
                                  experience_input.focus();
                                }
                              } else {
                                e.preventDefault();
                                skills_input.parent().addClass('alert-undefined');
                                skills_input.focus();
                              }
                            } else {
                              e.preventDefault();
                              office_input.parent().addClass('alert-undefined');
                              office_input.focus();
                            }
                          } else {
                            e.preventDefault();
                            education_input.parent().addClass('alert-undefined');
                            education_input.focus();
                          }
                        } else {
                          e.preventDefault();
                          site_input.parent().addClass('alert-undefined');
                          site_input.focus();
                        }
                      }
                    } else {
                      e.preventDefault();
                      linkedin_input.parent().addClass('alert-undefined');
                      linkedin_input.focus();
                    }
                  } else {
                    e.preventDefault();
                    personal_profile_input.parent().addClass('alert-undefined');
                    personal_profile_input.focus();
                  }
                } else {
                  e.preventDefault();
                  image_profile_input.parent().addClass('alert-undefined');
                  image_profile_input.focus();
                }
              } else {
                e.preventDefault();
                address_input.parent().addClass('alert-undefined');
                address_input.focus();
              }
            } else {
              e.preventDefault();
              phone_input.parent().addClass('alert-undefined');
              phone_input.focus();
            }
          } else {
            e.preventDefault();
            tel_input.parent().addClass('alert-undefined');
            tel_input.focus();
          }
        }
      } else {
        e.preventDefault();
        email_input.parent().addClass('alert-undefined');
        email_input.focus();
      }
    } else {
      e.preventDefault();
      lname_input.parent().addClass('alert-undefined');
      lname_input.focus();
    }
  } else {
    e.preventDefault();
    fname_input.parent().addClass('alert-undefined');
    fname_input.focus();
  }
});

$('input, textarea').keyup(function (e) {
  if ($(this).val() !== '') {
    $(this.parentNode).removeClass('alert-undefined');
  } else {
    $(this.parentNode).addClass('alert-undefined');
  }
});

skills_input.keyup(function () {
  var val = $(this).val().replace(/[\.\,\:\;\-\_\*\/\\]/g, ' ');
  $(this).val(val);
});

tel_input.on('input', function () {
  var tel_value = $(this).val().replace(/[^\d]/g, '');
  if (tel_value.length === 8) tel_value = tel_value.replace(/(\d{4})(\d{4})/, '$1-$2');
  else if (tel_value.length === 10) tel_value = tel_value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
  $(this).val(tel_value);
});

phone_input.on('input', function () {
  var phone_value = $(this).val().replace(/[^\d]/g, '');
  if (phone_value.length === 9) phone_value = phone_value.replace(/(\d{5})(\d{4})/, '$1-$2');
  else if (phone_value.length === 11) phone_value = phone_value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
  $(this).val(phone_value);
});

function loadFile (event) {
  var output = $('#image_preview');
  output.attr('src', URL.createObjectURL(event.target.files[0])).addClass('is-visible');
  image_profile_input.parent().removeClass('alert-undefined');
}

var education_suggBox = $('.autocom-box.education');
var office_suggBox = $('.autocom-box.office');

education_input.keyup(function (e) {
  let userData = e.target.value;
  let emptyArray = [];
  if (userData) {
    emptyArray = education_suggestions.filter((data)=>{
      return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
    });
    emptyArray = emptyArray.map((data)=>{
      return data = `<li>${data}</li>`;
    });
    education_input.addClass('sugestions');
    education_suggBox.addClass('is-show');
    showEducationSuggestions(emptyArray);
    let allList = $('.autocom-box li');
    for (let i = 0; i < allList.length; i++) {
      allList[i].setAttribute('onclick', 'educationSelect(this)');
    }
  } else {
    education_input.removeClass('sugestions');
    education_suggBox.removeClass('is-show');
  }
});

function educationSelect (element) {
  let selectData = element.textContent;
  education_input.val(selectData);
  education_input.removeClass('sugestions');
  education_suggBox.removeClass("is-show");
}

function showEducationSuggestions (list) {
  let listData;
  if (!list.length) {
    userValue = education_input.val();
    listData = `<li>${userValue}</li>`;
  } else {
    listData = list.join('');
  }
  education_suggBox.html(listData);
}

office_input.keyup(function (e) {
  let userData = e.target.value;
  let emptyArray = [];
  if (userData) {
    emptyArray = office_suggestions.filter((data)=>{
      return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
    });
    emptyArray = emptyArray.map((data)=>{
      return data = `<li>${data}</li>`;
    });
    office_input.addClass('sugestions');
    office_suggBox.addClass('is-show');
    showOfficeSuggestions(emptyArray);
    let allList = $('.autocom-box li');
    for (let i = 0; i < allList.length; i++) {
      allList[i].setAttribute('onclick', 'officeSelect(this)');
    }
  } else {
    office_input.removeClass('sugestions');
    office_suggBox.removeClass('is-show');
  }
});

function officeSelect (element) {
  let selectData = element.textContent;
  office_input.val(selectData);
  office_input.removeClass('sugestions');
  office_suggBox.removeClass("is-show");
}

function showOfficeSuggestions (list) {
  let listData;
  if (!list.length) {
    userValue = office_input.val();
    listData = `<li>${userValue}</li>`;
  } else {
    listData = list.join('');
  }
  office_suggBox.html(listData);
}