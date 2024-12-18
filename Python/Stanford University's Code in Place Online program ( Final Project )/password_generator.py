import random
import string


def generate_pass(length, numbers=True, special_characters=True):
    letters = string.ascii_letters
    digits = string.digits
    special = string.punctuation

    characters = letters
    if numbers:
        characters += digits
    if special_characters:
        characters += special

    password = ""
    meets_criteria = False
    has_number = False
    has_special = False

    while not meets_criteria or len(password) < length:
        new_character = random.choice(characters)
        password += new_character

        if new_character in digits:
            has_number = True
        elif new_character in special:
            has_special = True

        meets_criteria = True
        if numbers:
            meets_criteria = has_number
        if special_characters:
            meets_criteria = meets_criteria and has_special

    return password


length = int(input("Minimum Length : "))
has_number = input("Add Number? (YES/NO) : ").lower() == "yes"
has_special = input("Add Special Characters? (YES/NO) : ").lower() == "yes"
password = generate_pass(length, has_number, has_special)
print("Password : ", password)
