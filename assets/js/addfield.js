function addField() {
   const formContainer = document.getElementById('form-container');

   const newFieldContainer = document.createElement('div');
   newFieldContainer.classList.add('form-group', 'field-container');

   const optionInput = document.createElement('input');
   optionInput.type = 'text';
   optionInput.name = 'option[]';
   optionInput.placeholder = 'Enter option';
   optionInput.classList.add('block', 'w-full', 'rounded-md', 'border-0', 'px-3', 'py-1.5', 'text-gray-900', 'shadow-sm', 'ring-1', 'ring-inset', 'ring-gray-300', 'placeholder:text-gray-400', 'focus:ring-2', 'focus:ring-inset', 'focus:ring-indigo-600', 'sm:text-sm', 'sm:leading-6');

   const valueInput = document.createElement('input');
   valueInput.type = 'text';
   valueInput.name = 'value[]';
   valueInput.placeholder = 'Enter value';
   valueInput.classList.add('block', 'w-full', 'rounded-md', 'border-0', 'px-3', 'py-1.5', 'text-gray-900', 'shadow-sm', 'ring-1', 'ring-inset', 'ring-gray-300', 'placeholder:text-gray-400', 'focus:ring-2', 'focus:ring-inset', 'focus:ring-indigo-600', 'sm:text-sm', 'sm:leading-6');

   const removeButton = document.createElement('button');
   removeButton.type = 'button';
   removeButton.textContent = 'Remove';
   removeButton.classList.add('text-red-600');
   removeButton.addEventListener('click', function () {
      formContainer.removeChild(newFieldContainer);
   });

   newFieldContainer.appendChild(optionInput);
   newFieldContainer.appendChild(valueInput);
   newFieldContainer.appendChild(removeButton);
   formContainer.appendChild(newFieldContainer);
}