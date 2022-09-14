<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::insert([
            [
                'title' => 'Companies',
                'title_ar' => 'الشركات',
                'slug' => 'terms-and-conditions',
                'content' => "
                <p>
                    Finding the right candidate for a position in your establishment can be a long and tricky process, requiring you to scan through many CVs, carry out research on multiple candidates, interview multiple candidates, and make some tough decisions.
                    Why not let employment experts take care of all this quickly and efficiently?
                </p>
                <p>
                    HR Recruitment humbly offers employers our professional services to assist you in finding the very best candidates to join your workforce. We vet our job-seekers thoroughly, compiling their relevant experience, their qualifications, and their suitability
                    to your open position so you only receive the best people for the job.
                </p>
                <p>
                    Our experts will take all of your requirements and preferences into account during the entire process, meaning we will only send the very best-suited candidates your way, making your decisions that much more simple to make.
                </p>
                
                <p>
                    Don't sacrifice your valuable time and resources with a long and sometimes fruitless recruitment process, instead seek the services of a well-established recruitment consult that will get you the candidate you need first-time.
                </p>
                <p>
                    Hire Hub is a long-established recruitment consult dedicated to finding the best-suited professionals available for your positions. By allowing us to source your staff for you, you can expect to only receive candidates who would be a fantastic
                    asset to your company.
                </p>
                <p>
                    Please get in touch with Hire Hub today, we can take you through our process of how we bring you the employees you need in detail.
                </p>
                <p>
                    Give us a call at our Head offices at:
                    <mark>+(249)914049323</mark> or at offices at:
                    <mark>Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1</mark>
                </p>
                <p>
                    You can also use our contact form to get in touch with us, or email us directly at
                    <mark>info@hirehub-sd.com</mark>, we look forward to hearing from you.
                </p>
                ",
                'content_ar' => "
                <p>
                يمكن أن يكون العثور على المرشح المناسب لمنصب في مؤسستك عملية طويلة وصعبة ، تتطلب منك مسح العديد من السير الذاتية ، وإجراء أبحاث على مرشحين متعددين ، ومقابلة مرشحين متعددين ، واتخاذ بعض القرارات الصعبة. لماذا لا تدع خبراء التوظيف يهتمون بكل هذا بسرعة وكفاءة؟
                </p>
                <p>
                تقدم HIREHUB Recruitment بتواضع لأصحاب العمل خدماتنا المهنية لمساعدتك في العثور على أفضل المرشحين للانضمام إلى القوى العاملة الخاصة بك. نقوم بفحص الباحثين عن عمل لدينا بدقة ، وتجميع خبراتهم ذات الصلة ، ومؤهلاتهم ، وملاءمتهم
                إلى مركزك المفتوح حتى تتلقى فقط أفضل الأشخاص لهذا المنصب.
                </p>
                <p>
                سيأخذ خبراؤنا جميع متطلباتك وتفضيلاتك في الاعتبار خلال العملية بأكملها ، مما يعني أننا سنرسل فقط المرشحين الأكثر ملاءمة في طريقك ، مما يجعل قراراتك أكثر بساطة في اتخاذها.
                </p>
                
                <p>
                لا تضحي بوقتك ومواردك الثمينة من خلال عملية توظيف طويلة وغير مثمرة في بعض الأحيان ، بل ابحث عن خدمات استشارة توظيف راسخة من شأنها أن تحصل على المرشح الذي تحتاجه لأول مرة.
                </p>
                <p>
                Hire Hub هو مستشار توظيف راسخ مكرس للعثور على أفضل المهنيين المناسبين المتاحين لوظائفك. من خلال السماح لنا بالحصول على موظفيك نيابة عنك ، يمكنك أن تتوقع فقط استقبال المرشحين الذين سيكونون رائعين
                الأصول لشركتك.
                </p>
                <p>
                يرجى الاتصال ب Hire Hub اليوم ، يمكننا أن نأخذك خلال عملية كيفية تقديم الموظفين الذين تحتاجهم بالتفصيل.
                </p>
                <p>
                اتصل بنا في مكاتبنا الرئيسية على:
                    <mark>+(249)914049323</mark> أو في المكاتب في:
                    <mark>Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1</mark>
                </p>
                <p>
                يمكنك أيضا استخدام نموذج الاتصال الخاص بنا للتواصل معنا ، أو مراسلتنا عبر البريد الإلكتروني مباشرة على
                    <mark>info@hirehub-sd.com</mark>, نتطلع إلى الاستماع إليك.
                </p>
                ",
                'is_navbar_page' => '1',
                'is_footer_page' => '1',
            ],
        ]);
    }
}
