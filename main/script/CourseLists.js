
const courseCodes = ['BSCS', 'BSIT', 'BSBA', 'BBA', 'BA', 'BEd', 'BE', 'BCom', 'BFA', 'BArch', 'BPharm', 'BPT', 'BDS', 'LLB', 'BSc', 'B.Tech', 'BHM', 'BMM', 'BDes', 'BSW', 'BAMS', 'BUMS', 'BN', 'BMT', 'BMLT', 'B.Pharm', 'BScN', 'BSE', 'BEM', 'BVA', 'BFT', 'B.Plan'];
const coursesList = document.getElementById('courses-list');

courseCodes.forEach(courseCode => {
  const li = document.createElement('li');
  const a = document.createElement('a');
  a.textContent = courseCode;
  a.setAttribute('href', `?pg=${courseCode}`);
  li.appendChild(a);
  coursesList.appendChild(li);
});
