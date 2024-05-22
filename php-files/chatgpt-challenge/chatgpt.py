def generate_html_form(inputs):
    html = "<!DOCTYPE html>\n"
    html += "<html lang='en'>\n"
    html += "<head>\n"
    html += "<meta charset='UTF-8'>\n"
    html += "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n"
    html += "<title>Form</title>\n"
    html += "</head>\n"
    html += "<body>\n"
    html += "<form method='post' action='chatgpt.php'>\n"
    for input_type, input_name, input_label in inputs:
        if input_type == "text":
            html += f"<label>{input_label}: <input type='text' name='{input_name}'></label><br>\n"
        elif input_type == "password":
            html += f"<label>{input_label}: <input type='password' name='{input_name}'></label><br>\n"
        elif input_type == "email":
            html += f"<label>{input_label}: <input type='email' name='{input_name}'></label><br>\n"
        elif input_type == "dropdown":
            html += f"<label>{input_label}: <select name='{input_name}'>\n"
            html += "<option value='NL'>NL</option>\n"
            html += "<option value='DE'>DE</option>\n"
            html += "<option value='FR'>FR</option>\n"
            html += "</select></label><br>\n"
        elif input_type == "checkbox":
            html += f"<label><input type='checkbox' name='{input_name}'> {input_label}</label><br>\n"
        elif input_type == "datepicker":
            html += f"<label>{input_label}: <input type='date' name='{input_name}'></label><br>\n"
    html += "<input type='submit' value='Submit'>\n"
    html += "</form>\n"
    html += "</body>\n"
    html += "</html>"
    return html

# Voorbeeld van gebruik
inputs = [
    ("text", "name", "Name"),
    ("email", "email", "Email"),
    ("password", "password", "Password"),
    ("dropdown", "country", "Country"),
    ("checkbox", "driver_license", "Do you have a driver's license?"),
    ("datepicker", "birthdate", "Birthdate")
]

print(generate_html_form(inputs))
