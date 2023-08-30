import tkinter as tk
import time
import re

def update_clock():
    now = time.localtime()
    hours = now.tm_hour % 12
    minutes = now.tm_min
    seconds = now.tm_sec

    hour_deg = (hours * 30) + (0.5 * minutes)
    minute_deg = (minutes * 6) + (0.1 * seconds)
    second_deg = seconds * 6

    hour_hand.config(angle=hour_deg)
    minute_hand.config(angle=minute_deg)
    second_hand.config(angle=second_deg)
    
    window.after(1000, update_clock)  # Chamada novamente após 1 segundo

def validate_email(event):
    email = email_input.get()
    if is_valid_email(email):
        email_error.config(text="")
    else:
        email_error.config(text="Enter a valid email address.")

def is_valid_email(email):
    email_pattern = r"^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$"
    return re.match(email_pattern, email)

window = tk.Tk()
window.title("Clock and Login Form")

hour_hand = tk.Label(window, text="Hour Hand", font=("Helvetica", 16))
minute_hand = tk.Label(window, text="Minute Hand", font=("Helvetica", 16))
second_hand = tk.Label(window, text="Second Hand", font=("Helvetica", 16))

hour_hand.pack()
minute_hand.pack()
second_hand.pack()

update_clock()

email_input = tk.Entry(window)
email_input.pack()

email_error = tk.Label(window, text="", fg="red")
email_error.pack()

email_input.bind("<KeyRelease>", validate_email)

window.mainloop()
