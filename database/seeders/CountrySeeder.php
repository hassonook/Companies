<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::truncate();

        $countries = [
                ['name' => 'Afghanistan', 'name_ar' => 'أفغانستان', 'code' => 'AF'],
                ['name' => 'Åland Islands', 'name_ar' => 'جزر آلاند', 'code' => 'AX'],
                ['name' => 'Albania', 'name_ar' => 'ألبانيا', 'code' => 'AL'],
                ['name' => 'Algeria', 'name_ar' => 'الجزائر', 'code' => 'DZ'],
                ['name' => 'American Samoa', 'name_ar' => 'ساموا الأمريكية', 'code' => 'AS'],
                ['name' => 'Andorra', 'name_ar' => 'أندورا', 'code' => 'AD'],
                ['name' => 'Angola', 'name_ar' => 'أنجولا', 'code' => 'AO'],
                ['name' => 'Anguilla', 'name_ar' => 'أنغيلا', 'code' => 'AI'],
                ['name' => 'Antarctica', 'name_ar' => 'القارة القطبية الجنوبية', 'code' => 'AQ'],
                ['name' => 'Antigua and Barbuda', 'name_ar' => 'أنتيغوا وبربودا', 'code' => 'AG'],
                ['name' => 'Argentina', 'name_ar' => 'الأرجنتين', 'code' => 'AR'],
                ['name' => 'Armenia', 'name_ar' => 'أرمينيا', 'code' => 'AM'],
                ['name' => 'Aruba', 'name_ar' => 'أروبا', 'code' => 'AW'],
                ['name' => 'Australia', 'name_ar' => 'أستراليا', 'code' => 'AU'],
                ['name' => 'Austria', 'name_ar' => 'النمسا', 'code' => 'AT'],
                ['name' => 'Azerbaijan', 'name_ar' => 'أذربيجان', 'code' => 'AZ'],
                ['name' => 'Bahamas', 'name_ar' => 'جزر البهاما', 'code' => 'BS'],
                ['name' => 'Bahrain', 'name_ar' => 'البحرين', 'code' => 'BH'],
                ['name' => 'Bangladesh', 'name_ar' => 'بنغلاديش', 'code' => 'BD'],
                ['name' => 'Barbados', 'name_ar' => 'بربادوس', 'code' => 'BB'],
                ['name' => 'Belarus', 'name_ar' => 'بيلاروسيا', 'code' => 'BY'],
                ['name' => 'Belgium', 'name_ar' => 'بلجيكا', 'code' => 'BE'],
                ['name' => 'Belize', 'name_ar' => 'بليز', 'code' => 'BZ'],
                ['name' => 'Benin', 'name_ar' => 'بنين', 'code' => 'BJ'],
                ['name' => 'Bermuda', 'name_ar' => 'برمودا', 'code' => 'BM'],
                ['name' => 'Bhutan', 'name_ar' => 'بوتان', 'code' => 'BT'],
                ['name' => 'Bolivia Plurinational State of', 'name_ar' => 'دولة بوليفيا المتعددة القوميات', 'code' => 'BO'],
                ['name' => 'Bonaire Sint Eustatius and Saba', 'name_ar' => 'بونير سينت أوستاتيوس وسابا', 'code' => 'BQ'],
                ['name' => 'Bosnia and Herzegovina', 'name_ar' => 'البوسنة والهرسك', 'code' => 'BA'],
                ['name' => 'Botswana', 'name_ar' => 'بوتسوانا', 'code' => 'BW'],
                ['name' => 'Bouvet Island', 'name_ar' => 'جزيرة بوفيه', 'code' => 'BV'],
                ['name' => 'Brazil', 'name_ar' => 'البرازيل', 'code' => 'BR'],
                ['name' => 'British Indian Ocean Territory', 'name_ar' => 'إقليم المحيط البريطاني الهندي', 'code' => 'IO'],
                ['name' => 'Brunei Darussalam', 'name_ar' => 'بروناي دار السلام', 'code' => 'BN'],
                ['name' => 'Bulgaria', 'name_ar' => 'بلغاريا', 'code' => 'BG'],
                ['name' => 'Burkina Faso', 'name_ar' => 'بوركينا فاسو', 'code' => 'BF'],
                ['name' => 'Burundi', 'name_ar' => 'بوروندي', 'code' => 'BI'],
                ['name' => 'Cambodia', 'name_ar' => 'كمبوديا', 'code' => 'KH'],
                ['name' => 'Cameroon', 'name_ar' => 'الكاميرون', 'code' => 'CM'],
                ['name' => 'Canada', 'name_ar' => 'كندا', 'code' => 'CA'],
                ['name' => 'Cape Verde', 'name_ar' => 'الرأس الأخضر', 'code' => 'CV'],
                ['name' => 'Cayman Islands', 'name_ar' => 'جزر كايمان', 'code' => 'KY'],
                ['name' => 'Central African Republic', 'name_ar' => 'جمهورية افريقيا الوسطى', 'code' => 'CF'],
                ['name' => 'Chad', 'name_ar' => 'تشاد', 'code' => 'TD'],
                ['name' => 'Chile', 'name_ar' => 'تشيلي', 'code' => 'CL'],
                ['name' => 'China', 'name_ar' => 'الصين', 'code' => 'CN'],
                ['name' => 'Christmas Island', 'name_ar' => 'جزيرة عيد الميلاد', 'code' => 'CX'],
                ['name' => 'Cocos (Keeling) Islands', 'name_ar' => 'جزر كوكوس (كيلينغ)', 'code' => 'CC'],
                ['name' => 'Colombia', 'name_ar' => 'كولومبيا', 'code' => 'CO'],
                ['name' => 'Comoros', 'name_ar' => 'جزر القمر', 'code' => 'KM'],
                ['name' => 'Congo', 'name_ar' => 'الكونغو', 'code' => 'CG'],
                ['name' => 'Congo the Democratic Republic of the', 'name_ar' => 'الكونغو جمهورية الكونغو الديمقراطية', 'code' => 'CD'],
                ['name' => 'Cook Islands', 'name_ar' => 'جزر كوك', 'code' => 'CK'],
                ['name' => 'Costa Rica', 'name_ar' => 'كوستا ريكا', 'code' => 'CR'],
                ['name' => 'Côte d\'Ivoire', 'name_ar' => 'ساحل العاج', 'code' => 'CI'],
                ['name' => 'Croatia', 'name_ar' => 'كرواتيا', 'code' => 'HR'],
                ['name' => 'Cuba', 'name_ar' => 'كوبا', 'code' => 'CU'],
                ['name' => 'Curaçao', 'name_ar' => 'كوراساو', 'code' => 'CW'],
                ['name' => 'Cyprus', 'name_ar' => 'قبرص', 'code' => 'CY'],
                ['name' => 'Czech Republic', 'name_ar' => 'الجمهورية التشيكية', 'code' => 'CZ'],
                ['name' => 'Denmark', 'name_ar' => 'الدنمارك', 'code' => 'DK'],
                ['name' => 'Djibouti', 'name_ar' => 'جيبوتي', 'code' => 'DJ'],
                ['name' => 'Dominica', 'name_ar' => 'دومينيكا', 'code' => 'DM'],
                ['name' => 'Dominican Republic', 'name_ar' => 'جمهورية الدومينيكان', 'code' => 'DO'],
                ['name' => 'Ecuador', 'name_ar' => 'الإكوادور', 'code' => 'EC'],
                ['name' => 'Egypt', 'name_ar' => 'مصر', 'code' => 'EG'],
                ['name' => 'El Salvador', 'name_ar' => 'المنقذ', 'code' => 'SV'],
                ['name' => 'Equatorial Guinea', 'name_ar' => 'غينيا الإستوائية', 'code' => 'GQ'],
                ['name' => 'Eritrea', 'name_ar' => 'إريتريا', 'code' => 'ER'],
                ['name' => 'Estonia', 'name_ar' => 'إستونيا', 'code' => 'EE'],
                ['name' => 'Ethiopia', 'name_ar' => 'أثيوبيا', 'code' => 'ET'],
                ['name' => 'Falkland Islands (Malvinas)', 'name_ar' => 'جزر فوكلاند (فوكلاند)', 'code' => 'FK'],
                ['name' => 'Faroe Islands', 'name_ar' => 'جزر فاروس', 'code' => 'FO'],
                ['name' => 'Fiji', 'name_ar' => 'فيجي', 'code' => 'FJ'],
                ['name' => 'Finland', 'name_ar' => 'فنلندا', 'code' => 'FI'],
                ['name' => 'France', 'name_ar' => 'فرنسا', 'code' => 'FR'],
                ['name' => 'French Guiana', 'name_ar' => 'غيانا الفرنسية', 'code' => 'GF'],
                ['name' => 'French Polynesia', 'name_ar' => 'بولينيزيا الفرنسية', 'code' => 'PF'],
                ['name' => 'French Southern Territories', 'name_ar' => 'المناطق الجنوبية لفرنسا', 'code' => 'TF'],
                ['name' => 'Gabon', 'name_ar' => 'الجابون', 'code' => 'GA'],
                ['name' => 'Gambia', 'name_ar' => 'غامبيا', 'code' => 'GM'],
                ['name' => 'Georgia', 'name_ar' => 'جورجيا', 'code' => 'GE'],
                ['name' => 'Germany', 'name_ar' => 'ألمانيا', 'code' => 'DE'],
                ['name' => 'Ghana', 'name_ar' => 'غانا', 'code' => 'GH'],
                ['name' => 'Gibraltar', 'name_ar' => 'جبل طارق', 'code' => 'GI'],
                ['name' => 'Greece', 'name_ar' => 'اليونان', 'code' => 'GR'],
                ['name' => 'Greenland', 'name_ar' => 'الأرض الخضراء', 'code' => 'GL'],
                ['name' => 'Grenada', 'name_ar' => 'غرينادا', 'code' => 'GD'],
                ['name' => 'Guadeloupe', 'name_ar' => 'جوادلوب', 'code' => 'GP'],
                ['name' => 'Guam', 'name_ar' => 'غوام', 'code' => 'GU'],
                ['name' => 'Guatemala', 'name_ar' => 'غواتيمالا', 'code' => 'GT'],
                ['name' => 'Guernsey', 'name_ar' => 'غيرنسي', 'code' => 'GG'],
                ['name' => 'Guinea', 'name_ar' => 'غينيا', 'code' => 'GN'],
                ['name' => 'Guinea-Bissau', 'name_ar' => 'غينيا بيساو', 'code' => 'GW'],
                ['name' => 'Guyana', 'name_ar' => 'غويانا', 'code' => 'GY'],
                ['name' => 'Haiti', 'name_ar' => 'هايتي', 'code' => 'HT'],
                ['name' => 'Heard Island and McDonald Mcdonald Islands', 'name_ar' => 'قلب الجزيرة وجزر ماكدونالز', 'code' => 'HM'],
                ['name' => 'Holy See (Vatican City State)', 'name_ar' => 'الكرسي الرسولي (دولة مدينة الفاتيكان)', 'code' => 'VA'],
                ['name' => 'Honduras', 'name_ar' => 'هندوراس', 'code' => 'HN'],
                ['name' => 'Hong Kong', 'name_ar' => 'هونج كونج', 'code' => 'HK'],
                ['name' => 'Hungary', 'name_ar' => 'هنغاريا', 'code' => 'HU'],
                ['name' => 'Iceland', 'name_ar' => 'أيسلندا', 'code' => 'IS'],
                ['name' => 'India', 'name_ar' => 'الهند', 'code' => 'IN'],
                ['name' => 'Indonesia', 'name_ar' => 'إندونيسيا', 'code' => 'ID'],
                ['name' => 'Iran Islamic Republic of', 'name_ar' => 'جمهورية إيران الإسلامية""', 'code' => 'IR'],
                ['name' => 'Iraq', 'name_ar' => 'العراق', 'code' => 'IQ'],
                ['name' => 'Ireland', 'name_ar' => 'أيرلندا', 'code' => 'IE'],
                ['name' => 'Isle of Man', 'name_ar' => 'جزيرة آيل أوف مان', 'code' => 'IM'],
                ['name' => 'Israel', 'name_ar' => 'إسرائيل', 'code' => 'IL'],
                ['name' => 'Italy', 'name_ar' => 'إيطاليا', 'code' => 'IT'],
                ['name' => 'Jamaica', 'name_ar' => 'جامايكا', 'code' => 'JM'],
                ['name' => 'Japan', 'name_ar' => 'اليابان', 'code' => 'JP'],
                ['name' => 'Jersey', 'name_ar' => 'جيرسي', 'code' => 'JE'],
                ['name' => 'Jordan', 'name_ar' => 'الأردن', 'code' => 'JO'],
                ['name' => 'Kazakhstan', 'name_ar' => 'كازاخستان', 'code' => 'KZ'],
                ['name' => 'Kenya', 'name_ar' => 'كينيا', 'code' => 'KE'],
                ['name' => 'Kiribati', 'name_ar' => 'كيريباتي', 'code' => 'KI'],
                ['name' => 'Korea Democratic People\'s Republic of', 'name_ar' => 'جمهورية كوريا الديمقراطية الشعبية""', 'code' => 'KP'],
                ['name' => 'Korea Republic of', 'name_ar' => 'جمهورية كوريا', 'code' => 'KR'],
                ['name' => 'Kuwait', 'name_ar' => 'الكويت', 'code' => 'KW'],
                ['name' => 'Kyrgyzstan', 'name_ar' => 'قيرغيزستان', 'code' => 'KG'],
                ['name' => 'Lao People\'s Democratic Republic', 'name_ar' => 'جمهورية لاو الديمقراطية الشعبية', 'code' => 'LA'],
                ['name' => 'Latvia', 'name_ar' => 'لاتفيا', 'code' => 'LV'],
                ['name' => 'Lebanon', 'name_ar' => 'لبنان', 'code' => 'LB'],
                ['name' => 'Lesotho', 'name_ar' => 'ليسوتو', 'code' => 'LS'],
                ['name' => 'Liberia', 'name_ar' => 'ليبيريا', 'code' => 'LR'],
                ['name' => 'Libya', 'name_ar' => 'ليبيا', 'code' => 'LY'],
                ['name' => 'Liechtenstein', 'name_ar' => 'ليختنشتاين', 'code' => 'LI'],
                ['name' => 'Lithuania', 'name_ar' => 'ليتوانيا', 'code' => 'LT'],
                ['name' => 'Luxembourg', 'name_ar' => 'لوكسمبورغ', 'code' => 'LU'],
                ['name' => 'Macao', 'name_ar' => 'ماكاو', 'code' => 'MO'],
                ['name' => 'Macedonia the Former Yugoslav Republic of', 'name_ar' => 'مقدونيا جمهورية يوغوسلافيا السابقة', 'code' => 'MK'],
                ['name' => 'Madagascar', 'name_ar' => 'مدغشقر', 'code' => 'MG'],
                ['name' => 'Malawi', 'name_ar' => 'ملاوي', 'code' => 'MW'],
                ['name' => 'Malaysia', 'name_ar' => 'ماليزيا', 'code' => 'MY'],
                ['name' => 'Maldives', 'name_ar' => 'جزر المالديف', 'code' => 'MV'],
                ['name' => 'Mali', 'name_ar' => 'مالي', 'code' => 'ML'],
                ['name' => 'Malta', 'name_ar' => 'مالطا', 'code' => 'MT'],
                ['name' => 'Marshall Islands', 'name_ar' => 'جزر مارشال', 'code' => 'MH'],
                ['name' => 'Martinique', 'name_ar' => 'مارتينيك', 'code' => 'MQ'],
                ['name' => 'Mauritania', 'name_ar' => 'موريتانيا', 'code' => 'MR'],
                ['name' => 'Mauritius', 'name_ar' => 'موريشيوس', 'code' => 'MU'],
                ['name' => 'Mayotte', 'name_ar' => 'مايوت', 'code' => 'YT'],
                ['name' => 'Mexico', 'name_ar' => 'المكسيك', 'code' => 'MX'],
                ['name' => 'Micronesia Federated States of', 'name_ar' => 'ولايات ميكرونيزيا الموحدة', 'code' => 'FM'],
                ['name' => 'Moldova Republic of', 'name_ar' => 'جمهورية مولدوفا', 'code' => 'MD'],
                ['name' => 'Monaco', 'name_ar' => 'موناكو', 'code' => 'MC'],
                ['name' => 'Mongolia', 'name_ar' => 'منغوليا', 'code' => 'MN'],
                ['name' => 'Montenegro', 'name_ar' => 'الجبل الأسود', 'code' => 'ME'],
                ['name' => 'Montserrat', 'name_ar' => 'مونتسيرات', 'code' => 'MS'],
                ['name' => 'Morocco', 'name_ar' => 'المغرب', 'code' => 'MA'],
                ['name' => 'Mozambique', 'name_ar' => 'موزمبيق', 'code' => 'MZ'],
                ['name' => 'Myanmar', 'name_ar' => 'ميانمار', 'code' => 'MM'],
                ['name' => 'Namibia', 'name_ar' => 'ناميبيا', 'code' => 'NA'],
                ['name' => 'Nauru', 'name_ar' => 'ناورو', 'code' => 'NR'],
                ['name' => 'Nepal', 'name_ar' => 'نيبال', 'code' => 'NP'],
                ['name' => 'Netherlands', 'name_ar' => 'هولندا', 'code' => 'NL'],
                ['name' => 'New Caledonia', 'name_ar' => 'كاليدونيا الجديدة', 'code' => 'NC'],
                ['name' => 'New Zealand', 'name_ar' => 'نيوزيلندا', 'code' => 'NZ'],
                ['name' => 'Nicaragua', 'name_ar' => 'نيكاراغوا', 'code' => 'NI'],
                ['name' => 'Niger', 'name_ar' => 'النيجر', 'code' => 'NE'],
                ['name' => 'Nigeria', 'name_ar' => 'نيجيريا', 'code' => 'NG'],
                ['name' => 'Niue', 'name_ar' => 'نيوي', 'code' => 'NU'],
                ['name' => 'Norfolk Island', 'name_ar' => 'جزيرة نورفولك', 'code' => 'NF'],
                ['name' => 'Northern Mariana Islands', 'name_ar' => 'جزر مريانا الشمالية', 'code' => 'MP'],
                ['name' => 'Norway', 'name_ar' => 'النرويج', 'code' => 'NO'],
                ['name' => 'Oman', 'name_ar' => 'سلطنة عمان', 'code' => 'OM'],
                ['name' => 'Pakistan', 'name_ar' => 'باكستان', 'code' => 'PK'],
                ['name' => 'Palau', 'name_ar' => 'بالاو', 'code' => 'PW'],
                ['name' => 'Palestine State of', 'name_ar' => 'دولة فلسطين', 'code' => 'PS'],
                ['name' => 'Panama', 'name_ar' => 'بنما', 'code' => 'PA'],
                ['name' => 'Papua New Guinea', 'name_ar' => 'بابوا غينيا الجديدة', 'code' => 'PG'],
                ['name' => 'Paraguay', 'name_ar' => 'باراجواي', 'code' => 'PY'],
                ['name' => 'Peru', 'name_ar' => 'بيرو', 'code' => 'PE'],
                ['name' => 'Philippines', 'name_ar' => 'فيلبيني', 'code' => 'PH'],
                ['name' => 'Pitcairn', 'name_ar' => 'بيتكيرن', 'code' => 'PN'],
                ['name' => 'Poland', 'name_ar' => 'بولندا', 'code' => 'PL'],
                ['name' => 'Portugal', 'name_ar' => 'البرتغال', 'code' => 'PT'],
                ['name' => 'Puerto Rico', 'name_ar' => 'بورتوريكو', 'code' => 'PR'],
                ['name' => 'Qatar', 'name_ar' => 'دولة قطر', 'code' => 'QA'],
                ['name' => 'Réunion', 'name_ar' => 'مقابلة', 'code' => 'RE'],
                ['name' => 'Romania', 'name_ar' => 'رومانيا', 'code' => 'RO'],
                ['name' => 'Russian Federation', 'name_ar' => 'الاتحاد الروسي', 'code' => 'RU'],
                ['name' => 'Rwanda', 'name_ar' => 'رواندا', 'code' => 'RW'],
                ['name' => 'Saint Barthélemy', 'name_ar' => 'القديس بارثولوميو', 'code' => 'BL'],
                ['name' => 'Saint Helena Ascension and Tristan da Cunha', 'name_ar' => 'صعود سانت هيلانة وتريستان دا كونها', 'code' => 'SH'],
                ['name' => 'Saint Kitts and Nevis', 'name_ar' => 'سانت كيتس ونيفيس', 'code' => 'KN'],
                ['name' => 'Saint Lucia', 'name_ar' => 'القديسة لوسيا', 'code' => 'LC'],
                ['name' => 'Saint Martin (French part)', 'name_ar' => 'سانت مارتن (الجزء الفرنسي)', 'code' => 'MF'],
                ['name' => 'Saint Pierre and Miquelon', 'name_ar' => 'القديس بطرس وميكلون', 'code' => 'PM'],
                ['name' => 'Saint Vincent and the Grenadines', 'name_ar' => 'سانت فنسنت وجزر غرينادين', 'code' => 'VC'],
                ['name' => 'Samoa', 'name_ar' => 'ساموا', 'code' => 'WS'],
                ['name' => 'San Marino', 'name_ar' => 'سان مارينو', 'code' => 'SM'],
                ['name' => 'Sao Tome and Principe', 'name_ar' => 'ساو تومي وبرينسيبي', 'code' => 'ST'],
                ['name' => 'Saudi Arabia', 'name_ar' => 'المملكة العربية السعودية', 'code' => 'SA'],
                ['name' => 'Senegal', 'name_ar' => 'السنغال', 'code' => 'SN'],
                ['name' => 'Serbia', 'name_ar' => 'صربيا', 'code' => 'RS'],
                ['name' => 'Seychelles', 'name_ar' => 'سيشيل', 'code' => 'SC'],
                ['name' => 'Sierra Leone', 'name_ar' => 'سيرا ليون', 'code' => 'SL'],
                ['name' => 'Singapore', 'name_ar' => 'سنغافورة', 'code' => 'SG'],
                ['name' => 'Sint Maarten (Dutch part)', 'name_ar' => 'سينت مارتن (الجزء الهولندي)', 'code' => 'SX'],
                ['name' => 'Slovakia', 'name_ar' => 'سلوفاكيا', 'code' => 'SK'],
                ['name' => 'Slovenia', 'name_ar' => 'سلوفينيا', 'code' => 'SI'],
                ['name' => 'Solomon Islands', 'name_ar' => 'جزر سليمان', 'code' => 'SB'],
                ['name' => 'Somalia', 'name_ar' => 'الصومال', 'code' => 'SO'],
                ['name' => 'South Africa', 'name_ar' => 'جنوب أفريقيا', 'code' => 'ZA'],
                ['name' => 'South Georgia and the South Sandwich Islands', 'name_ar' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', 'code' => 'GS'],
                ['name' => 'South Sudan', 'name_ar' => 'جنوب السودان', 'code' => 'SS'],
                ['name' => 'Spain', 'name_ar' => 'إسبانيا', 'code' => 'ES'],
                ['name' => 'Sri Lanka', 'name_ar' => 'سيريلانكا', 'code' => 'LK'],
                ['name' => 'Sudan', 'name_ar' => 'السودان', 'code' => 'SD'],
                ['name' => 'Suriname', 'name_ar' => 'سورينام', 'code' => 'SR'],
                ['name' => 'Svalbard and Jan Mayen', 'name_ar' => 'سفالبارد والبحر', 'code' => 'SJ'],
                ['name' => 'Swaziland', 'name_ar' => 'سوازيلاند', 'code' => 'SZ'],
                ['name' => 'Sweden', 'name_ar' => 'السويد', 'code' => 'SE'],
                ['name' => 'Switzerland', 'name_ar' => 'سويسرا', 'code' => 'CH'],
                ['name' => 'Syrian Arab Republic', 'name_ar' => 'الجمهورية العربية السورية', 'code' => 'SY'],
                ['name' => 'Taiwan', 'name_ar' => 'تايوان', 'code' => 'TW'],
                ['name' => 'Tajikistan', 'name_ar' => 'طاجيكستان', 'code' => 'TJ'],
                ['name' => 'Tanzania United Republic of', 'name_ar' => 'تنزانيا جمهورية تنزانيا المتحدة', 'code' => 'TZ'],
                ['name' => 'Thailand', 'name_ar' => 'تايلاند', 'code' => 'TH'],
                ['name' => 'Timor-Leste', 'name_ar' => 'تيمور الشرقية', 'code' => 'TL'],
                ['name' => 'Togo', 'name_ar' => 'توجو', 'code' => 'TG'],
                ['name' => 'Tokelau', 'name_ar' => 'توكيلاو', 'code' => 'TK'],
                ['name' => 'Tonga', 'name_ar' => 'تونغا', 'code' => 'TO'],
                ['name' => 'Trinidad and Tobago', 'name_ar' => 'ترينداد وتوباغو', 'code' => 'TT'],
                ['name' => 'Tunisia', 'name_ar' => 'تونس', 'code' => 'TN'],
                ['name' => 'Turkey', 'name_ar' => 'ديك رومى', 'code' => 'TR'],
                ['name' => 'Turkmenistan', 'name_ar' => 'تركمانستان', 'code' => 'TM'],
                ['name' => 'Turks and Caicos Islands', 'name_ar' => 'جزر تركس وكايكوس', 'code' => 'TC'],
                ['name' => 'Tuvalu', 'name_ar' => 'توفالو', 'code' => 'TV'],
                ['name' => 'Uganda', 'name_ar' => 'أوغندا', 'code' => 'UG'],
                ['name' => 'Ukraine', 'name_ar' => 'أوكرانيا', 'code' => 'UA'],
                ['name' => 'United Arab Emirates', 'name_ar' => 'الإمارات العربية المتحدة', 'code' => 'AE'],
                ['name' => 'United Kingdom', 'name_ar' => 'المملكة المتحدة', 'code' => 'GB'],
                ['name' => 'United States', 'name_ar' => 'الولايات المتحدة', 'code' => 'US'],
                ['name' => 'United States Minor Outlying Islands', 'name_ar' => 'جزر الولايات المتحدة البعيدة الصغرى', 'code' => 'UM'],
                ['name' => 'Uruguay', 'name_ar' => 'أوروغواي', 'code' => 'UY'],
                ['name' => 'Uzbekistan', 'name_ar' => 'أوزبكستان', 'code' => 'UZ'],
                ['name' => 'Vanuatu', 'name_ar' => 'فانواتو', 'code' => 'VU'],
                ['name' => 'Venezuela Bolivarian Republic of', 'name_ar' => 'جمهورية فنزويلا البوليفارية', 'code' => 'VE'],
                ['name' => 'Viet Nam', 'name_ar' => 'فيتنام', 'code' => 'VN'],
                ['name' => 'Virgin Islands British', 'name_ar' => 'جزر فيرجن البريطانية', 'code' => 'VG'],
                ['name' => 'Virgin Islands U.S.', 'name_ar' => 'جزر فيرجن الأمريكية', 'code' => 'VI'],
                ['name' => 'Wallis and Futuna', 'name_ar' => 'واليس وفوتونا', 'code' => 'WF'],
                ['name' => 'Western Sahara', 'name_ar' => 'الصحراء الغربية', 'code' => 'EH'],
                ['name' => 'Yemen', 'name_ar' => 'اليمن', 'code' => 'YE'],
                ['name' => 'Zambia', 'name_ar' => 'زامبيا', 'code' => 'ZM'],
                ['name' => 'Zimbabwe', 'name_ar' => 'زيمبابوي', 'code' => 'ZW']        ];

        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }
}
