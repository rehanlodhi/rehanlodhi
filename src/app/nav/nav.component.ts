import { Component } from '@angular/core';

@Component({
  selector: 'app-nav',
  standalone: true,
  imports: [],
  templateUrl: './nav.component.html',
  styleUrl: './nav.component.scss'
})
export class NavComponent {
  navItems = [
    {
      id: 0,
      name: "Home"
    },
    {
      id: 1,
      name: "About"
    },
    {
      id: 2,
      name: "Blog"
    },
    {
      id: 3,
      name: "Projects"
    },
    {
      id: 4,
      name: "GitHub"
    }
  ]
}
