
var form_validation = function() {
    var e = function() {
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "busName": {
                        required: !0,

                    },
                    "busContactPersonRole": {


                    },
                    "courName": {

                      required: !0,
                    },
                    "busAddress": {
                        required: !0,

                    },
                    "busType": {
                        required: !0,

                    },
                    "busContactPerson": {

                    },
                    "busEmail": {
                      email: !0
                    },

                    "busWebsite": {
                        url: !0
                    },
                    "busContact": {
                        required: !0,
                        phone: !0
                    },
                    "busABN": {

                        digits: !0
                    },

                  "bullTopic": {
                      required: !0

                  },
                  "bullDate": {
                    required: !0

                  },
                  "bullContent": {
                    required: !0

                  },
                  "stuFirstName": {
                    required: !0

                  },
                  "stuLastName": {
                    required: !0

                  },
                  "parentName": {
                    required: !0

                  },
                  "flagged": {
                    required: !0

                  },
                  "age": {
                    required: !0

                  },
                  "contact": {
                    required: !0

                  },
                  "schoolName": {
                    required: !0

                  },
                  "courseLevel": {
                    required: !0

                  },
                  "courseName": {
                    required: !0

                  },

                },
                messages: {
                    "busName": {
                        required: "Please enter business name",

                    },
                    "courName": {
                        required: "Please enter course name",

                    },
                    "busAddress": {
                        required: "Please enter business address",

                    },
                    "busType": {
                        required: "Please enter business type",

                    },
                    "busContact": {
                        required: "Please enter a valid phone number!",

                    },
                    "bullTopic": {
                        required: "Please enter Bulletin Topic",

                    },
                    "bullDate": {
                        required: "Please enter Bulletin Date",

                    },
                    "bullContent": {
                        required: "Please enter Bulletin Content",

                    },
                    "stuFirstName": {
                        required: "Please enter Student First name",

                    },
                    "stuLastName": {
                        required: "Please enter Student Last Name",

                    },
                    "parentName": {
                        required: "Please enter Student's parent name",

                    },
                    "flagged": {
                        required: "Please Notify Student!",

                    },
                    "age": {
                        required: "Please enter Student Age",

                    },
                    "contact": {
                        required: "Please enter Parent's Contact",

                    },
                    "schoolName": {
                        required: "Please enter Student School Name",

                    },
                    "courseLevel": {
                        required: "Please enter Course Level",

                    },
                    "courseName": {
                        required: "Please enter Course Name",

                    },
                    "busEmail": "Please enter a valid email address",
                    "busWebsite": "Please enter business website!",
                    "busABN": "Please enter only digits for ABN!"

                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});
