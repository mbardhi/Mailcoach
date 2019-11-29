<p class="form-note">
    TODO: add link to SES setup instructions
</p>

<x-text-field label="Key" name="ses_key" type="text" :value="$mailConfiguration->ses_key"/>
<x-text-field label="Secret" name="ses_secret" type="password" :value="$mailConfiguration->ses_secret"/>
<x-text-field label="Region" name="ses_region" type="text"
                :value="$mailConfiguration->ses_region"/>
<x-text-field label="Configuration set name" name="ses_configuration_set" type="text"
              :value="$mailConfiguration->ses_configuration_set"/>

<p class="form-note">
You must set a webhook to <code class="markup-code">{{ url(action(\Spatie\MailcoachSesFeedback\SesWebhookController::class)) }}</code>
</p>