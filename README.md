# webhook_test

This small `PHP`program logs into a mysql database the webhook setup on a repository. The database has a simple table that contains two columns:

- id: Autoincrement to keep track of the webhook events.
- Payload: The actual payload from the webhook.

It should be very simple to set up, and it let you see how webhooks work.