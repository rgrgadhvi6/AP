
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
                    "val-Bname": {
                        required: !0,

                    },
                    "val-Bcontactpersonrole": {


                    },
                    "val-Baddress": {
                        required: !0,

                    },
                    "val-Btype": {
                        required: !0,

                    },
                    "val-Bcontactperson": {
                    

                    },
                    "val-Bemail": {

                    },
                    "val-password": {
                        required: !0,
                        minlength: 5
                    },
                    "val-confirm-password": {
                        required: !0,
                        equalTo: "#val-password"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-suggestions": {
                        required: !0,
                        minlength: 5
                    },
                    "val-Bsize": {

                    },
                    "val-currency": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-Bwebsite": {

                        url: !0
                    },
                    "val-Bphone": {
                        required: !0,
                        phone: !0
                    },
                    "val-Babn": {

                        digits: !0
                    },
                    "val-number": {
                        required: !0,
                        number: !0
                    },
                    "val-range": {
                        required: !0,
                        range: [1, 5]
                    },
                    "val-terms": {
                        required: !0
                    }
                },
                messages: {
                    "val-Bname": {
                        required: "Please enter Business name",

                    },
                    "val-Bcontactpersonrole": {
                        required: "Please enter Businesscontact person name",

                    },


                    "val-Baddress": {
                        required: "Please enter Business address",

                    },
                    "val-Btype": {
                        required: "Please enter Business type",

                    },
                    "val-Bcontactperson": {
                        required: "Please enter Business contact person name",

                    },
                    "val-Bcontactpersonrole": {
                        required: "Please enter name only",

                    },
                    "val-Bemail": "Please enter a valid email address",
                    "val-password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    "val-confirm-password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    "val-Bsize": "Please select Business size!",
                    "val-Bwebsite": "Please enter Business website!",
                    "val-Bcontactpersonrole": "Please enter Business contact person role!",
                    "val-Bphone": "Please enter a valid phone number!",
                    "val-Babn": "Please enter only digits for ABN!",


                    "val-select2": "Please select a value!",
                    "val-select2-multiple": "Please select at least 2 values!",
                    "val-suggestions": "What can we do to become better?",

                    "val-currency": "Please enter a price!",



                    "val-digits": "Please enter only digits for ABN!",

                    "val-range": "Please enter a number between 1 and 5!",
                    "val-terms": "You must agree to the service terms!"
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
