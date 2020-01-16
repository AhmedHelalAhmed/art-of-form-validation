let rules = {
    email: {
        required: true,
        email: true
    },
    password: {
        required: true,
        minlength: 6
    }
};
$("#login").validate(rules);
