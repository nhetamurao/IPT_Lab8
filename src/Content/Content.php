<?php
namespace Content;

abstract class Content {
    protected $title;
    protected $body;
    protected $imageName;
    protected $imageUrl = "https://www.auf.edu.ph/home/images/articles/bya.jpg"; 


    public function __construct() {
        $this->title = "Angeles University Foundation";
        $this ->imageName = "Dr. Barbara Yap Angeles"; 
        $this->body = "BARBARA was born on December 4, 1907. Her birth was considered a high event, an appropriate justification for a Yuletide thanksgiving celebration. On Christmas Day, the family invited friends and relatives to witness the very charming way the baby girl would open her eyes and squint at the guests who were disarmed by the innocence of her smile.<br><br>
    
        The years passed very quickly and the infant blossomed into a lovable schoolgirl, earning credits for her mathematics prowess, and honors for her language proficiency. Averse to seeking for public recognition, Barbara was content with her silent victory over the curricular requirements. Upon graduation from high school, she informed her parents of her decision to pursue a degree in education.<br><br>
    
        'From the start, there was a dream. When first she enrolled in the College of Education at the Centro Escolar de Senoritas, Barbara Yap Angeles, already had the purposive motivation to create, organize and actualize an obsession: to provide education to all those who have less in life but with the potentials for development and the capabilities for leadership.'<br><br>
    
        With the support of her family and friends, Barbara envisioned an educational institution which was to play a major role in the uplift of the academic outlook of those described aptly as having 'less in life' but deserved more in education. The heart of Barbara was sold on the education of the youth. Forthwith after graduation from the Centro Escolar de Senoritas in 1930, she once more embarked in the gigantic implementation of her dream. Her big problem, of course, was how to have the school to build her dream on. Supportive of Barbara's dream, Ildefonso, her brother, gifted her with the Angeles Academy, the first private school in Pampanga which formally opened on May 10, 1931.<br><br>
    
        The school building was located on the site of the former Lourdes Elementary School, now occupied by the Dr. Clemente H. Dayrit Elementary School, just behind the present location of the Angeles University Foundation. The lot was donated by the Dayrit family on condition that it reverts back the original owner if the school discontinues operation.<br><br>
    
        The school building was a modest one-storey structure, semi-concrete, with four classrooms. Ildefonso and Barbara had such great faith in the goodness of man that they expected loyalty from the administrative and teaching staff. The first to be trusted was a young man whom Ildefonso knew and met at Avenida Rizal, Manila looking for a job. Out of the goodness of his heart, Ildefonso gave him the position of assistant principal of the school. Barbara for her part accepted the services of a classmate at Centro Escolar de Senoritas as part of the administrative staff. All went well for a time, with the teachers performing their level best.<br><br>
    
        Barbara was a good school administrator, but not shrewd enough to engage in a reconnaissance or surveillance over her 'trusted' people. She did trust them completely and any suspicion of disloyalty was against her nature. As a consequence, the Janus in her staff succeeded in undermining her and she became resigned to the fact that she had to give up her dream for the while. In 1933 the school was closed. And the site was turned over by the Dayrit family to the government as a donation for a public elementary school. It was heartbreaking to lose the school because of the betrayal of her teaching staff. Every time, this story was told, tears would surge in Barbara's eyes.<br><br>
    
        Barbara learned her lesson well and with renewed strength and enthusiasm, she re-established the Angeles Institute of Technology on May 25, 1962 with the help of her family. As founder, she proved that a woman is just as capable as any man in the realm of education. No longer was she fazed by competition. In fact, it was the staff educational management was made of.<br><br>
    
        It was quite ironic that on the day the Angeles Institute of Technology was opened, a big fire gutted down the Angeles City public market. The estimated loss of property was placed at several millions of pesos. Homeless and jobless, the thousands of fire victims suffered resolutely and with the characteristic endurance. Agustin and Barbara Angeles empathized with the pain of the unfortunate. Forthwith, the couple offered free tuition fee and other forms of scholarships to help with their education. This philanthropic gesture endeared the couple to the community. Their name - to the present day - has become a by-word in benevolence.<br><br>
    
        Barbara was a woman of wisdom. She remained undaunted by this unfortunate evidence of man's ingratitude to man. On the other hand, it strengthened her resolve to keep alive the dream of providing education to deserving students.";
    }

    abstract public function render();
}