
const constraints = {
    diameter: {
        presence: {allowEmpty: false}
    },
    width: {
        presence: {allowEmpty: false},
    },
    heigh: {
        presence: {allowEmpty: false},
    },
    number: {
        presence: {allowEmpty: false}
    }
  };

  const form = document.getElementById('contact-form');

  form.addEventListener('submit', function (event) {
        const formValues = {
            diameter: form.elements.diameter.value,
            width: form.elements.width.value,
            heigh: form.elements.heigh.value,
            number: form.elements.number.value
         };

          const errors = validate(formValues, constraints);

        if (errors) {
             event.preventDefault();
             const errorMessage = Object
                .values(errors)
                .map(function (fieldValues) {
                  return fieldValues.join(', ')
            })
            .join("\n");

          alert(errorMessage);
      }
  }, false);

  "use strict";

