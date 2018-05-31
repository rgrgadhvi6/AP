
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

                  }

                },
                messages: {
                    "busName": {
                        required: "Please enter business name",

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
