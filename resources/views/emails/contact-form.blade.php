<h2>New Contact Form Submission</h2>

<p><strong>Name:</strong> {{ $contactData['name'] }}</p>
<p><strong>Email:</strong> {{ $contactData['email'] }}</p>

<p><strong>Services Interested In:</strong></p>
<ul>
    @if($contactData['website'] ?? false) <li>Website</li> @endif
    @if($contactData['branding'] ?? false) <li>Branding</li> @endif
    @if($contactData['ecommerce'] ?? false) <li>E-commerce</li> @endif
    @if($contactData['seo'] ?? false) <li>SEO</li> @endif
</ul>

<p><strong>Message:</strong></p>
<p>{{ $contactData['message'] }}</p>
