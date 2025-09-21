<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $mobileDevice = false;
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->database();
		$this->load->model('Model_functions','model');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('date');
		if ($this->isMobileDevice()) {
		    $this->mobileDevice = true;
		}
	}

	/**
	*

		@HATH NA LAIE

	*
	*/
	/*     TEMPLATE     */

	public function template($page = '', $data = '')
	{
		$data['footer_blog'] = $this->model->get_footer_blog();
		if (isset($_SESSION['visitorCurrentCountry']) && $_SERVER['REMOTE_ADDR'] == $_SESSION['visitorCurrentIP']) {
			$_SESSION['visitorCurrentCountry'] = $_SESSION['visitorCurrentCountry'];
			$_SESSION['visitorCurrentIP'] = $_SERVER['REMOTE_ADDR'];
		}
		else{
			$_SESSION['visitorCurrentCountry'] = $this->get_country();
			$_SESSION['visitorCurrentIP'] = $_SERVER['REMOTE_ADDR'];
		}
		$data['pricing'] = $this->get_pricing();
		$data['schemaMarkupData'] = $this->generate_schema_markup($data);
		if ($this->mobileDevice === false) {
			$this->load->view('header',$data);
			$this->load->view($page,$data);
			$this->load->view('footer',$data);
		}
		else{
			$data['meta_img'] = IMG.'logo.webp';
			$data['menu_class'] = 'dark-menu';
			$this->load->view('mobile/header',$data);
			$this->load->view('mobile/'.$page,$data);
			$this->load->view('mobile/footer',$data);
		}
	}
	public function page_missing()
	{
		$data['meta_title'] = 'Page Not Found';
		$data['meta_key'] = '';
		$data['meta_desc'] = 'The page you are looking for does not exist. Please check the URL or go back to the homepage.';
		$data['meta_robots'] = true;
		$data['meta_url'] = BASEURL;
		$data['meta_img'] = IMG.'logo.webp';
		$data['menu_class'] = 'dark-menu';
		$this->template('page_missing',$data);
	}

	/**
		
		Site

	*
	*/
	public function index()
	{
		$this->load->model('Model_home','model_home');

		$data['meta_title'] = 'Enterests - Comprehensive CRM & Project Management Software';
		$data['meta_key'] = 'CRM, Project Management, task management, client management, invoicing, time tracking, team collaboration, milestones, Gantt charts, expense tracking, online payments, custom dashboards';
		$data['meta_desc'] = 'Discover Enterests, the ultimate CRM and Project Management software designed to streamline your business operations. Manage projects, track tasks, handle client communications, generate invoices, and more with ease.';
		$data['meta_url'] = BASEURL;
		$data['meta_img'] = IMG.'logo.webp';
		$data['menu_class'] = '';
		$data['testimonials'] = $this->load->view('html/testimonials',$data, TRUE);
		$data['metaSection'] = $this->load->view('html/meta',$data, TRUE);
		$data['home_blog'] = $this->model_home->get_home_blog();
		$data['main_blog'] = $this->model_home->get_main_blog();
		$data['activePage'] = 'home';
		$this->template('index',$data);
	}
	public function lead_management()
	{
		$data['meta_title'] = 'Lead Management System | Capture, Track, and Convert Leads with Enterests';
		$data['meta_key'] = "Enterests Lead Management, Meta Integration, Capture Leads, Sales Pipeline, Lead Scoring, Lead Assignment, Lead Conversion, Follow-Up Reminders, Sales Management, Lead Logs, Complaint Management, Automated Lead Tracking, Facebook Leads, Instagram Leads";
		$data['meta_desc'] = 'Manage leads efficiently with Enterests. Capture leads directly from Meta platforms, track them through the sales pipeline, and convert them into loyal customers. Equip your team with automation, follow-up reminders, lead scoring, and more, all within a GDPR-compliant environment.';
		$data['meta_url'] = BASEURL.'lead-management';
		$data['meta_img'] = IMG.'logo.webp';
		$data['menu_class'] = 'dark-menu';
		$this->template('lead_management',$data);
	}
	public function project_management()
	{
		$data['meta_title'] = 'Lead Management System | Capture, Track, and Convert Leads with Enterests';
		$data['meta_key'] = "Enterests Lead Management, Meta Integration, Capture Leads, Sales Pipeline, Lead Scoring, Lead Assignment, Lead Conversion, Follow-Up Reminders, Sales Management, Lead Logs, Complaint Management, Automated Lead Tracking, Facebook Leads, Instagram Leads";
		$data['meta_desc'] = 'Manage leads efficiently with Enterests. Capture leads directly from Meta platforms, track them through the sales pipeline, and convert them into loyal customers. Equip your team with automation, follow-up reminders, lead scoring, and more, all within a GDPR-compliant environment.';
		$data['meta_url'] = BASEURL.'project-management';
		$data['meta_img'] = IMG.'logo.webp';
		$data['menu_class'] = 'dark-menu';
		$this->template('project_management',$data);
	}
	public function about_us()
	{
		$data['meta_title'] = 'About Enterests - Comprehensive CRM & Project Management Software';
		$data['meta_key'] = "CRM, Project Management Software, Task Management, Lead Integration, Client Portal, Invoicing, Online Payments, Support Tickets, Custom Dashboards, Expense Tracking, Gantt Chart, Timesheets, Collaboration Tools, Google Drive Integration, GDPR Compliance";
		$data['meta_desc'] = 'Discover Enterests, a versatile CRM & project management platform designed to streamline your workflow. Manage projects, tasks, clients, invoices, support tickets, and more with advanced features and seamless integration. Automate lead collection, enhance team collaboration, and boost productivity with Enterests.';
		$data['meta_url'] = BASEURL.'terms';
		$data['meta_img'] = IMG.'logo.webp';
		$data['menu_class'] = 'dark-menu';
		$data['testimonials'] = $this->load->view('html/testimonials',$data, TRUE);
		$data['metaSection'] = $this->load->view('html/meta',$data, TRUE);
		$this->template('about_us',$data);
	}
	public function terms()
	{
		$data['meta_title'] = 'Enterests CRM & Project Management Software - Terms & Conditions';
		$data['meta_key'] = 'Enterests CRM, project management software terms, CRM terms and conditions, data protection policies, service levels, client responsibilities, non-refund policy, intellectual property rights, confidentiality, governing law';
		$data['meta_desc'] = 'Review the Terms & Conditions for Enterests CRM & Project Management Software, covering service levels, data security, client responsibilities, and more. Ensure you understand our policies and your obligations.';
		$data['meta_url'] = BASEURL.'terms';
		$data['meta_img'] = IMG.'logo.webp';
		$data['menu_class'] = 'dark-menu';
		$this->template('terms',$data);
	}
	public function policy()
	{
		$data['meta_title'] = 'Enterests CRM & Project Management Software - Privacy Policy';
		$data['meta_key'] = "Enterests CRM, project management software privacy, data protection policy, information collection, usage data, cookies, data security, personal data rights, children's privacy";
		$data['meta_desc'] = "Review Enterests' Privacy Policy for CRM & Project Management Software. Learn about how we collect, use, share, and protect your information, and your data protection rights.";
		$data['meta_url'] = BASEURL.'policy';
		$data['menu_class'] = 'dark-menu';
		$this->template('policy',$data);
	}
	public function contact($package = false)
	{
		$data['meta_title'] = 'Contact Enterests CRM & Project Management Software - Get in Touch';
		$data['meta_key'] = 'Enterests CRM contact, project management software support, customer service, contact Enterests, CRM support, project management inquiries';
		$data['meta_desc'] = 'Have questions or need support? Contact Enterests CRM & Project Management Software for assistance. Find our contact details, support options, and how to get in touch with our team.';
		$data['meta_url'] = BASEURL.'contact';
		$data['menu_class'] = 'dark-menu';
		$data['package'] = $package;
		$data['activePage'] = 'contact';
		$data['contactForm'] = $this->load->view('html/contact',$data, TRUE);
		$this->template('contact',$data);
	}
	public function faqs()
	{
		$data['meta_title'] = 'FAQs - Enterests CRM & Project Management Software';
		$data['meta_key'] = 'FAQs, Enterests, CRM software, Project Management, business software, customer support, software features, help center, common questions';
		$data['meta_desc'] = 'Find answers to common questions about Enterests CRM & Project Management Software. Learn how our features can streamline your business operations and enhance productivity.';
		$data['meta_url'] = BASEURL.'faq';
		$data['menu_class'] = 'dark-menu';
		$data['faqPageSchema'] = true;
		$data['contactForm'] = $this->load->view('html/contact',$data, TRUE);
		$data['faqsHtml'] = $this->load->view('html/faqs',$data, TRUE);
		$this->template('faqs',$data);
	}
	public function blog()
	{
		$data['meta_title'] = 'Enterests Blog | CRM, Lead Management, and Business Solutions Insights';
		$data['meta_key'] = 'Enterests Blog, CRM insights, business automation, lead management, Meta integration, HR management, WhatsApp integration, business solutions, inventory management, AI support, business growth';
		$data['meta_desc'] = 'Explore the Enterests Blog for expert insights on CRM solutions, lead management, business automation, and how Enterests can streamline your operations. Stay updated with the latest features and best practices.';
		$data['meta_url'] = BASEURL.'blog';
		$data['menu_class'] = 'dark-menu';
		$data['blog']  = $this->model->get_results("SELECT `slug`,`title`,`image`,`at` FROM `blog` WHERE `status` = 'active' ORDER BY `at` DESC;");
		$this->template('blog',$data);
	}
	public function post($slug)
	{
		$data['post'] = $this->model->get_blog_by_slug($slug);
		$data['meta_title'] = $data['post']['meta_title'];
		$data['meta_key'] = $data['post']['meta_key'];
		$data['meta_desc'] = $data['post']['meta_desc'];
		$data['meta_url'] = BASEURL.'post/'.$data['post']['slug'];
		$data['meta_img'] = UPLOADS.$data['post']['image'];
		$data['menu_class'] = 'dark-menu';
		$this->template('post',$data);
	}
	/*
	*
	*	AJAX
	*/
	public function post_contact_form()
	{
		// Load CodeIgniter's email library
	    $this->load->library('email');

	    // Email configuration
	    $config['protocol'] = 'smtp';
	    $config['smtp_host'] = 'mail.enterests.com'; // Replace with your SMTP server
	    $config['smtp_port'] = 465; // Replace with your SMTP port
	    $config['smtp_user'] = 'no-reply@enterests.com'; // Replace with your SMTP username
	    $config['smtp_pass'] = 'jHu?vT=g1VjM'; // Replace with your SMTP password
	    $config['mailtype'] = 'html';
	    $config['charset']  = 'iso-8859-1';
	    $config['wordwrap'] = TRUE;

	    // Initialize email configuration
	    $this->email->initialize($config);
		
		$this->db->insert('contact',$_POST);

		$to = $_POST['email'];
		$from = "no-reply@enterests.com";
		$fromName = "Enterests";
		$subject = "Thank you for contacting Enterests";
		// Configure the email
	    $this->email->from($from, $fromName);
	    $this->email->to($to);
	    $this->email->subject($subject);
	    $this->email->message($this->load->view('html/contact_email', $_POST, TRUE));

	    if ($this->email->send()) {
	        $this->email->clear();
	        $this->email->to('info@enterests.com');
	        $this->email->send();
	    }

		echo json_encode(array("status"=>true,"message"=>"Thank you for reaching out to us. Our team will review your message and get back to you shortly."));
	}
	/*
	*
	*	Domestic
	*/
	private function generate_schema_markup($data)
    {
	    $schema = 
	        '<script type="application/ld+json">
		        {
			        "@context" : "https://schema.org",
			        "@type" : "WebPage",
			        "@id" : "'.$data['meta_url'].'",
			        "name" : "'.$data['meta_title'].'",
			        "description" : "'.$data['meta_desc'].'",
			        "url" : "'.$data['meta_url'].'",
			        "image" : "'.IMG.'logo.png",
			        "logo" : "'.IMG.'logo.png",
			        "datePublished" : "2024-08-01",
			        "author": {
					    "@type": "Organization",
					    "name": "Enterests",
					    "logo": "https://enterests.com/asset/images/logo.png",
					    "contactPoint": {
					      "@type": "ContactPoint",
					      "telephone": "+92 333 102 202 5",
					      "email": "info@enterests.com",
					      "contactType": "Customer Service"
					    },
					    "address": {
					      "@type": "PostalAddress",
					      "streetAddress": "P-120 Siddiq Trade Centre Gulberg II, Lahore, Pakistan",
					      "addressLocality": "Gulberg II",
					      "addressRegion": "Punjab",
					      "postalCode": "54000",
					      "addressCountry": "PK"
					    }
				  	}
		    	}
	        </script>';

	        $schema .= '
	        	<script type="application/ld+json">
				{
				  "@context": "https://schema.org",
				  "@type": "Place",
				  "geo": {
				    "@type": "GeoCoordinates",
				    "latitude": "31.5312848",
				    "longitude": "74.3498764"
				  },
				  "name": "Siddiq Trade Centre"
				}
				</script>
	        ';
	    
	        if (isset($data['faqPageSchema']) && $data['faqPageSchema'] == true) {
	        	$schema .= '
	        		<script type="application/ld+json">
					{
					"@context": "https://schema.org",
					"@type": "FAQPage",
					"name" : "'.$data['meta_title'].'",
					"description" : "'.$data['meta_desc'].'",
					"author": {
					    "@type": "Organization",
					    "name": "Enterests"
				  	},
					"mainEntity": [
						{
					    "@type": "Question",
					    "name": "How do I register for an Enterests account?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Registering for an Enterests account is simple. Just visit our registration page, fill out the form provided, and submit your request. Our team will review your details and contact you for confirmation. We will then set up your account and have it ready within 24-48 hours. You’ll receive an email with your account details once it’s ready, and you can start using Enterests immediately."
					    }
					  },{
					    "@type": "Question",
					    "name": "Is there a demo account available?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Yes, we offer a demo account that allows you to explore our software’s features before making a decision. You can access the demo directly from our website without needing to register. It’s a great way to get a feel for how Enterests can work for your business."
					    }
					  },{
					    "@type": "Question",
					    "name": "Do you offer a trial period?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Yes, we provide a 15-day free trial on all our packages. This trial gives you full access to all features so you can thoroughly evaluate how Enterests can enhance your business operations. There are zero charges or payments required during the trial period, and no credit card is needed to get started."
					    }
					  },{
					    "@type": "Question",
					    "name": "How can I request a trial account?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Requesting a trial account is easy. Visit our trial request page and fill out the required fields. Once submitted, our team will review your request and contact you for confirmation. We will then set up your trial account and have it ready within 24-48 hours. You’ll receive an email with your account details once it’s ready, and you can start using Enterests immediately. Full Name:The name of the relevant person in your organization. Email Address: A valid email address to receive your trial account details. Phone Number: A contact number for verification and support. Preferred Package: Choose the package you’re interested in trying. Business Typpe: Please provide us with your business nature(industry) Additional Comments: (Optional) Any specific needs or features you’d like to explore during the trial. After submitting this information, our team will contact you within 24 hours to confirm your details and set up your trial account. Your account will be ready within 24-48 hours after confirmation. Our Contact +92 333 102 202 5 info@enterests.com"
					    }
					  },{
					    "@type": "Question",
					    "name": "How does the billing process work?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Billing is conducted on a monthly basis, in advance. After your 15-day free trial period ends, your first payment will be due. Subsequent payments will be due on the 5th day of each month."
					    }
					  },{
					    "@type": "Question",
					    "name": "What happens if I miss a payment?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "If a payment is missed, the following steps will be taken: First Reminder: A soft reminder will be sent 7 days after the due date. Second Reminder: If the payment is still not received, a second soft reminder will be sent 14 days after the due date. Final Reminder: A final reminder with a warning of service suspension will be sent 21 days after the due date. If payment is not received within 7 days of this final reminder, we reserve the right to suspend your services."
					    }
					  },{
					    "@type": "Question",
					    "name": "Can I reinstate my services after suspension?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Yes, you can reinstate your services after suspension by clearing all outstanding payments. Once the payment is received, your services will be reactivated."
					    }
					  },{
					    "@type": "Question",
					    "name": "Will I receive an invoice for each payment?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Yes, an invoice will be generated and sent to your registered email address for each payment. You can also view and download your invoices from your account portal."
					    }
					  },{
					    "@type": "Question",
					    "name": "What payment methods do you accept?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "We currently accept payments via bank transfer or online banking transfer. Please find our account details in the billing section of your portal for more information."
					    }
					  },{
					    "@type": "Question",
					    "name": "How do I purchase an addon in Enterests?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "To purchase an addon, generate a request through the portal and make an advance payment. The pricing for addons is listed on the addon purchase request page."
					    }
					  },{
					    "@type": "Question",
					    "name": "How long does it take to activate an addon?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "After submitting your request and making the payment, our team will review it and contact you for confirmation. Once payment is confirmed, it takes 24-48 hours to activate the addon in your portal."
					    }
					  },{
					    "@type": "Question",
					    "name": "Are there any additional charges for addons?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "No, the addon pricing is a one-time payment. There are no extra charges added to your monthly billing."
					    }
					  },{
					    "@type": "Question",
					    "name": "Where can I find the pricing for addons?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "The pricing for addons is detailed on the addon purchase request page within your portal."
					    }
					  },{
					    "@type": "Question",
					    "name": "What should I do if I have issues with my addon purchase?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "If you encounter any issues, please contact our support team for assistance. We’ll be happy to help resolve any concerns. Our Contact +92 333 102 202 5 info@enterests.com"
					    }
					  },{
					    "@type": "Question",
					    "name": "What are the different packages available for Enterests?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "We offer three main packages: Starter Suite: PKR 7,500, designed for up to 3 users. Advanced Suite: PKR 13,200, designed for up to 6 users. Pro Suite: PKR 20,000, designed for up to 10 users. Custom Requirement: For teams larger than 10 users, we provide a tailored solution."
					    }
					  },{
					    "@type": "Question",
					    "name": "Can I change my package at any time?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Yes, you can upgrade or downgrade your package at any time. Rest assured, you won’t lose any of your data during the transition."
					    }
					  },{
					    "@type": "Question",
					    "name": "What is Meta Business Verification?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Meta Business Verification is a process designed to confirm the authenticity of your business on Meta’s platforms, such as Facebook and Instagram. This verification helps ensure that your business meets Meta\'s standards and can enhance your credibility on these platforms."
					    }
					  },{
					    "@type": "Question",
					    "name": "What are the requirements for Meta Business Verification?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "To be eligible for Meta Business Verification, you need to: Have a legal business entity (e.g., registered company, non-profit organization). Have a physical address and a working phone number. Provide relevant documents, such as business licenses, tax identification numbers, or utility bills, to prove your business’s legitimacy."
					    }
					  },{
					    "@type": "Question",
					    "name": "How do I start the verification process?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "To begin the verification process: Go to the Meta Business Manager or Meta Business Suite. Navigate to the \'Business Settings\' and select \'Business Info.\' Click on \'Verify Business\' and follow the prompts to submit your business information and required documents."
					    }
					  },{
					    "@type": "Question",
					    "name": "What documents are needed for verification?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "You may be asked to provide various documents, including: A government-issued business license. A utility bill or bank statement with your business’s name and address. Your tax identification number or proof of registration. Identification documents for business owners or authorized representatives."
					    }
					  },{
					    "@type": "Question",
					    "name": "How long does the verification process take?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "The verification process typically takes a few business days to a few weeks, depending on the completeness of your application and the volume of requests Meta is handling. You will be notified of your verification status through your Meta Business Manager or email."
					    }
					  },{
					    "@type": "Question",
					    "name": "What if my verification application is denied?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "If your application is denied, you will receive an explanation from Meta detailing why it was rejected. You can address the issues mentioned and resubmit your application. Ensure all provided information and documents are accurate and complete."
					    }
					  },{
					    "@type": "Question",
					    "name": "Can I appeal the verification decision?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Yes, if you believe the decision was made in error, you can appeal by contacting Meta’s support team through your Meta Business Manager. Provide any additional information or documentation that may support your case."
					    }
					  },{
					    "@type": "Question",
					    "name": "How do I update my business information after verification?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "If you need to update your business information after verification, go to the Meta Business Manager, navigate to \'Business Settings,\' and make the necessary changes under \'Business Info.\' You may be required to resubmit certain documents for approval."
					    }
					  },{
					    "@type": "Question",
					    "name": "Will verification affect my advertising or account features?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Verification itself does not affect your advertising or account features directly. However, it can unlock additional features and tools and help ensure that your business’s account is in good standing with Meta’s policies."
					    }
					  },{
					    "@type": "Question",
					    "name": "Who can I contact for help with the verification process?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "For assistance with the verification process, you can contact Meta’s support team through the Meta Business Help Center. They offer resources and support to help guide you through any issues or questions you may have."
					    }
					  },{
					    "@type": "Question",
					    "name": "What is a Meta app?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "A Meta app is an application or service that integrates with Meta\'s platforms, such as Facebook or Instagram, to provide additional features or functionalities. These apps can range from social media management tools to analytics and marketing solutions."
					    }
					  },{
					    "@type": "Question",
					    "name": "How do I get started with a Meta app?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "To get started with a Meta app: Visit the app\'s official website or the Meta App Dashboard. Follow the instructions to register or connect your Meta account. Configure the app settings according to your needs. If required, grant necessary permissions to the app to access your Meta account or data."
					    }
					  },{
					    "@type": "Question",
					    "name": "Do I need a Meta Business Account to use a Meta app?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "In most cases, yes. Many Meta apps require a Meta Business Account to access features like analytics, advertising tools, or page management. If you don’t have a Business Account, you may need to create one."
					    }
					  },{
					    "@type": "Question",
					    "name": "How do I connect my Meta account to the app?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "To connect your Meta account to the app: Open the app and go to the integration or settings section. Look for an option to connect or log in with Meta (Facebook or Instagram). Follow the prompts to log in to your Meta account and authorize the app to access your data."
					    }
					  },{
					    "@type": "Question",
					    "name": "What permissions does the app need, and why?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "The app may request various permissions, such as access to your Facebook Page, Instagram account, or ad account. These permissions allow the app to: Post updates or content on your behalf. Access analytics and performance data. Manage and monitor your ads or campaigns."
					    }
					  },{
					    "@type": "Question",
					    "name": "Is my data safe with the Meta app?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Meta apps are required to comply with Meta’s data policies and security standards. However, it’s important to review the app\'s privacy policy and terms of service to understand how your data will be used and protected."
					    }
					  },{
					    "@type": "Question",
					    "name": "How do I revoke permissions for a Meta app?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "To revoke permissions: Go to your Meta account settings. Navigate to \'Apps and Websites\' or a similar section. Find the app you want to remove and select \'Remove\' or \'Revoke Access.\'"
					    }
					  },{
					    "@type": "Question",
					    "name": "What should I do if the app isn’t working properly?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "If the app isn’t working correctly: Check the app’s help or support section for troubleshooting tips. Ensure your Meta account and app permissions are properly set up. Contact the app’s support team for assistance. Verify if there are any updates or maintenance notices from the app developer."
					    }
					  },{
					    "@type": "Question",
					    "name": "How do I update my Meta app settings?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "To update settings for a Meta app: Open the app and navigate to the settings or preferences section. Make the desired changes and save your updates. Some changes may also need to be made in your Meta account settings."
					    }
					  },{
					    "@type": "Question",
					    "name": "How can I contact support for the Meta app?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "You can typically contact support through: The app’s official website or support page. The help section within the app itself. Contact information provided in the app’s documentation or FAQs."
					    }
					  },{
					    "@type": "Question",
					    "name": "Can I use multiple Meta apps at the same time?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Yes, you can use multiple Meta apps simultaneously as long as they do not conflict with each other. Ensure that you manage permissions and settings for each app appropriately."
					    }
					  },{
					    "@type": "Question",
					    "name": "Will using a Meta app affect my Meta account’s performance or visibility?",
					    "acceptedAnswer": {
					      "@type": "Answer",
					      "text": "Using a Meta app should not directly affect your account’s performance or visibility if the app is functioning correctly. However, ensure that any app or tool you use complies with Meta’s policies and guidelines to avoid potential issues."
					    }
					  }
					]
					}
					</script>	
					';
	        }


	    return $schema;
    }
    public function sitemap()
	{
		$data['blog'] = $this->model->get_results("SELECT * FROM `blog` WHERE `status` = 'active' ORDER BY `at` ASC;");
		header("Content-Type: application/xml;charset=utf-8");
		$this->load->view('sitemap', $data);
	}
	public function robots() {
        $this->output->set_header('Content-Type: text/plain');
        $this->load->view('robots');
    }
    private function get_country()
    {
    	$ipAddress = $_SERVER['REMOTE_ADDR'];
		$accessKey = 'f0c9869a887c8a';

		$ch = curl_init("http://ipinfo.io/{$ipAddress}/json?token={$accessKey}");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		$data = json_decode($response, true);
		return $data['country'] ?? 'Unknown';
    }
    /* TEST */
    public function test()
    {
    	$data['meta_title'] = 'Why Enterests CRM is Essential for Your Business Growth';
		$data['meta_key'] = "Enterests CRM, business management, lead management, Meta integration, HR automation, WhatsApp integration, inventory management, AI support, CRM solutions, scalable CRM";
		$data['meta_desc'] = "Discover why Enterests CRM is vital for streamlining business operations. Manage leads, automate HR and payroll, capture Meta leads, and boost communication with WhatsApp integration.";
		$data['meta_url'] = BASEURL.'policy';
		$data['menu_class'] = 'dark-menu';
		$this->template('post_1',$data);
    }
    private function isMobileDevice() {
	    $userAgent = $_SERVER['HTTP_USER_AGENT'];
	    $mobileDevices = array(
	        'iphone', 'ipod', 'ipad', 'android', 'blackberry', 'mobile', 'opera mini',
	        'windows phone', 'iemobile', 'nokia', 'webos', 'symbian'
	    );
	    foreach ($mobileDevices as $device) {
	        if (stripos($userAgent, $device) !== false) {
	            return true;
	        }
	    }
	    return false;
	}
	private function get_pricing()
	{
		if ($_SESSION['visitorCurrentCountry'] == 'PK') {
			$data['starter']['monthly'] = 'PKR 7,500';
			$data['starter']['annual'] = 'PKR 90,000';
			$data['advanced']['monthly'] = 'PKR 13,200';
			$data['advanced']['annual'] = 'PKR 158,000';
			$data['pro']['monthly'] = 'PKR 20,000';
			$data['pro']['annual'] = 'PKR 240,000';
		}
		elseif ($_SESSION['visitorCurrentCountry'] == 'SA'){
			$data['starter']['monthly'] = '$60';
			$data['starter']['annual'] = '$720';
			$data['advanced']['monthly'] = '$240';
			$data['advanced']['annual'] = '$2,880';
			$data['pro']['monthly'] = '$600';
			$data['pro']['annual'] = '$72,000';
		}
		else{
			$data['starter']['monthly'] = '$60';
			$data['starter']['annual'] = '$720';
			$data['advanced']['monthly'] = '$240';
			$data['advanced']['annual'] = '$2,880';
			$data['pro']['monthly'] = '$600';
			$data['pro']['annual'] = '$72,000';
		}
		return $data;
	}
}