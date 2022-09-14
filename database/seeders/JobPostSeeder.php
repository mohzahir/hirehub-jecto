<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Illuminate\Database\Seeder;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobPost::insert([
            [
                'job_id' => '1',
                'city_id' => '1',
                'country_id' => '1',
                'category_id' => '1',
                'title' => 'Software Engineer',
                'title_ar' => 'مهندس برمجيات',
                'slug' => 'software-engineer-job-post',
                'short_descr' => 'We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor',
                'short_descr_ar' => ' نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'descr' => "
                <div class=\"details-inner\">
                <h3>Job Description</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Company</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to know that you werent lying on your resume about responsibilities.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want you to expand on the points that you included in your resume.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Want you to expand on the points that you included in your resume.
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                Ability to work under pressure
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Enterprise and entrepreneurial skills
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Negotiation and persuasion
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Understand where the other person is coming from so that you can both get what
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Our Mission</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Vision</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                </div>
                ",
                'descr_ar' => "
                <div class=\"details-inner\">
                <h3>الوصف الوظيفي</h3>
                <p>Lorem Ipsum هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ 1500s ، عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت به لصنع كتاب عينة من النوع. لقد نجت ليس فقط من خمسة قرون ، ولكن أيضا من القفزة في التنضيد الإلكتروني ، وبقيت دون تغيير جوهري.</p>
                </div>
                <div class=\"details-inner\">
                <h3>شركتنا</h3>
                <p>إنها حقيقة راسخة منذ فترة طويلة أن القارئ سوف يصرف انتباهه عن المحتوى القابل للقراءة للصفحة عند النظر إلى تخطيطها. الهدف من استخدام Lorem Ipsum هو أنه يحتوي على توزيع طبيعي إلى حد ما للحروف ، بدلا من استخدام المحتوى هنا ، المحتوى هنا.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>مسؤوليات الوظيفة</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدون أن يعرفوا أنك لم تكن تكذب على سيرتك الذاتية بشأن المسؤوليات.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون التحقق مما إذا كانت مسؤوليات وظيفتك تتداخل مع الدور المعروض.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون أن يجعلوك مرتاحا. دعونا نواجه الأمر. إنه سؤال سهل.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدونك أن تتوسع في النقاط التي أدرجتها في سيرتك الذاتية.
                </li>
                <li>
                <i class
                ",
                'salary_from' => '2000',
                'salary_to' => '3000',
                'experience' => '2',
                'duration' => '2',
                'is_featured' => '1',
                'status' => 'active',
                'created_at' => date('Y-m-d H:m'),
            ],
            [
                'job_id' => '2',
                'city_id' => '2',
                'country_id' => '2',
                'category_id' => '2',
                'title' => 'General Doctor',
                'title_ar' => 'طبيب عمومي',
                'slug' => 'general-doctor-job-post',
                'short_descr' => 'We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor',
                'short_descr_ar' => ' نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'descr' => "
                <div class=\"details-inner\">
                <h3>Job Description</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Company</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to know that you werent lying on your resume about responsibilities.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want you to expand on the points that you included in your resume.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Want you to expand on the points that you included in your resume.
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                Ability to work under pressure
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Enterprise and entrepreneurial skills
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Negotiation and persuasion
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Understand where the other person is coming from so that you can both get what
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Our Mission</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Vision</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                </div>
                ",
                'descr_ar' => "
                <div class=\"details-inner\">
                <h3>الوصف الوظيفي</h3>
                <p>Lorem Ipsum هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ 1500s ، عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت به لصنع كتاب عينة من النوع. لقد نجت ليس فقط من خمسة قرون ، ولكن أيضا من القفزة في التنضيد الإلكتروني ، وبقيت دون تغيير جوهري.</p>
                </div>
                <div class=\"details-inner\">
                <h3>شركتنا</h3>
                <p>إنها حقيقة راسخة منذ فترة طويلة أن القارئ سوف يصرف انتباهه عن المحتوى القابل للقراءة للصفحة عند النظر إلى تخطيطها. الهدف من استخدام Lorem Ipsum هو أنه يحتوي على توزيع طبيعي إلى حد ما للحروف ، بدلا من استخدام المحتوى هنا ، المحتوى هنا.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>مسؤوليات الوظيفة</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدون أن يعرفوا أنك لم تكن تكذب على سيرتك الذاتية بشأن المسؤوليات.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون التحقق مما إذا كانت مسؤوليات وظيفتك تتداخل مع الدور المعروض.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون أن يجعلوك مرتاحا. دعونا نواجه الأمر. إنه سؤال سهل.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدونك أن تتوسع في النقاط التي أدرجتها في سيرتك الذاتية.
                </li>
                <li>
                <i class
                ",
                'salary_from' => '4000',
                'salary_to' => '5000',
                'experience' => '1',
                'duration' => '1',
                'is_featured' => '1',
                'status' => 'active',
                'created_at' => date('Y-m-d H:m'),
            ],
            [
                'job_id' => '3',
                'city_id' => '3',
                'country_id' => '3',
                'category_id' => '3',
                'title' => 'Special Driver',
                'title_ar' => 'سائق خاص',
                'slug' => 'special-driver-job-post',
                'short_descr' => 'We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor',
                'short_descr_ar' => ' نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'descr' => "
                <div class=\"details-inner\">
                <h3>Job Description</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Company</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to know that you werent lying on your resume about responsibilities.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want you to expand on the points that you included in your resume.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Want you to expand on the points that you included in your resume.
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                Ability to work under pressure
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Enterprise and entrepreneurial skills
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Negotiation and persuasion
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Understand where the other person is coming from so that you can both get what
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Our Mission</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Vision</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                </div>
                ",
                'descr_ar' => "
                <div class=\"details-inner\">
                <h3>الوصف الوظيفي</h3>
                <p>Lorem Ipsum هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ 1500s ، عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت به لصنع كتاب عينة من النوع. لقد نجت ليس فقط من خمسة قرون ، ولكن أيضا من القفزة في التنضيد الإلكتروني ، وبقيت دون تغيير جوهري.</p>
                </div>
                <div class=\"details-inner\">
                <h3>شركتنا</h3>
                <p>إنها حقيقة راسخة منذ فترة طويلة أن القارئ سوف يصرف انتباهه عن المحتوى القابل للقراءة للصفحة عند النظر إلى تخطيطها. الهدف من استخدام Lorem Ipsum هو أنه يحتوي على توزيع طبيعي إلى حد ما للحروف ، بدلا من استخدام المحتوى هنا ، المحتوى هنا.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>مسؤوليات الوظيفة</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدون أن يعرفوا أنك لم تكن تكذب على سيرتك الذاتية بشأن المسؤوليات.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون التحقق مما إذا كانت مسؤوليات وظيفتك تتداخل مع الدور المعروض.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون أن يجعلوك مرتاحا. دعونا نواجه الأمر. إنه سؤال سهل.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدونك أن تتوسع في النقاط التي أدرجتها في سيرتك الذاتية.
                </li>
                <li>
                <i class
                ",
                'salary_from' => '2000',
                'salary_to' => '3000',
                'experience' => '2',
                'duration' => '2',
                'is_featured' => '1',
                'status' => 'active',
                'created_at' => date('Y-m-d H:m'),
            ],
            [
                'job_id' => '4',
                'city_id' => '4',
                'country_id' => '4',
                'category_id' => '4',
                'title' => 'Security Guard',
                'title_ar' => 'حارس امن وسلامة',
                'slug' => 'security-guard-job-post',
                'short_descr' => 'We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor',
                'short_descr_ar' => ' نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'descr' => "
                <div class=\"details-inner\">
                <h3>Job Description</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Company</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to know that you werent lying on your resume about responsibilities.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want you to expand on the points that you included in your resume.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to put you at ease. Lets face it. Its an easy question.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                They want to check if your job responsibilities overlap with the role on offer.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Want you to expand on the points that you included in your resume.
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Job Responsibilities</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                Ability to work under pressure
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Enterprise and entrepreneurial skills
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Negotiation and persuasion
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                Understand where the other person is coming from so that you can both get what
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>Our Mission</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class=\"details-inner\">
                <h3>Our Vision</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                </div>
                ",
                'descr_ar' => "
                <div class=\"details-inner\">
                <h3>الوصف الوظيفي</h3>
                <p>Lorem Ipsum هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ 1500s ، عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت به لصنع كتاب عينة من النوع. لقد نجت ليس فقط من خمسة قرون ، ولكن أيضا من القفزة في التنضيد الإلكتروني ، وبقيت دون تغيير جوهري.</p>
                </div>
                <div class=\"details-inner\">
                <h3>شركتنا</h3>
                <p>إنها حقيقة راسخة منذ فترة طويلة أن القارئ سوف يصرف انتباهه عن المحتوى القابل للقراءة للصفحة عند النظر إلى تخطيطها. الهدف من استخدام Lorem Ipsum هو أنه يحتوي على توزيع طبيعي إلى حد ما للحروف ، بدلا من استخدام المحتوى هنا ، المحتوى هنا.</p>
                </div>
                
                <div class=\"details-inner\">
                <h3>مسؤوليات الوظيفة</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدون أن يعرفوا أنك لم تكن تكذب على سيرتك الذاتية بشأن المسؤوليات.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون التحقق مما إذا كانت مسؤوليات وظيفتك تتداخل مع الدور المعروض.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون أن يجعلوك مرتاحا. دعونا نواجه الأمر. إنه سؤال سهل.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                يريدونك أن تتوسع في النقاط التي أدرجتها في سيرتك الذاتية.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون أن يجعلوك مرتاحا. دعونا نواجه الأمر. إنه سؤال سهل.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                إنهم يريدون التحقق مما إذا كانت مسؤوليات وظيفتك تتداخل مع الدور المعروض.
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                تريد منك التوسع في النقاط التي أدرجتها في سيرتك الذاتية.
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>مسؤوليات الوظيفة</h3>
                <ul>
                <li>
                <i class='bx bx-message-square-check'></i>
                القدرة على العمل تحت الضغط
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                مهارات المشاريع وريادة الأعمال
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                التفاوض والإقناع
                </li>
                <li>
                <i class='bx bx-message-square-check'></i>
                فهم من أين يأتي الشخص الآخر حتى تتمكن من الحصول على ما
                </li>
                </ul>
                </div>
                <div class=\"details-inner\">
                <h3>رسالتنا</h3>
                <p>Lorem Ipsum هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ 1500s ، عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت به لصنع كتاب عينة من النوع. لقد نجت ليس فقط من خمسة قرون ، ولكن أيضا من القفزة في التنضيد الإلكتروني ، وبقيت دون تغيير جوهري.</p>
                </div>
                <div class=\"details-inner\">
                <h3>رؤيتنا</h3>
                <p>هناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الفكاهة المحقونة ، أو الكلمات العشوائية التي لا تبدو قابلة للتصديق قليلا. إذا كنت ستستخدم مقطعا من Lorem Ipsum ، فأنت بحاجة إلى التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص. تميل جميع مولدات Lorem Ipsum على الإنترنت إلى تكرار أجزاء محددة مسبقا حسب الضرورة ، مما يجعل هذا هو أول شيء صحيح.</p>
                </div>
                ",
                'salary_from' => '4000',
                'salary_to' => '5000',
                'experience' => '1',
                'duration' => '1',
                'is_featured' => '1',
                'status' => 'active',
                'created_at' => date('Y-m-d H:m'),
            ],
        ]);
    }
}
