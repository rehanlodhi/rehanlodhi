export interface WPPost {
  id: number;
  slug: string;
  title: { rendered: string };
  excerpt: { rendered: string };
  content: { rendered: string };
  date: string;
  categories: number[];
  _embedded?: {
    'wp:term'?: Array<Array<{ id: number; name: string; slug: string }>>;
  };
}

export interface WPCategory {
  id: number;
  name: string;
  slug: string;
  count: number;
}

const WP_API = import.meta.env.WORDPRESS_API_URL ?? '';

async function wpFetch<T>(path: string): Promise<T> {
  const res = await fetch(`${WP_API}/wp-json/wp/v2${path}`);
  if (!res.ok) throw new Error(`WordPress API error: ${res.status} ${path}`);
  return res.json() as Promise<T>;
}

export async function getWPPosts(perPage = 10): Promise<WPPost[]> {
  return wpFetch<WPPost[]>(
    `/posts?per_page=${perPage}&_embed=wp:term&status=publish`
  );
}

export async function getWPPostBySlug(slug: string): Promise<WPPost | null> {
  const posts = await wpFetch<WPPost[]>(
    `/posts?slug=${slug}&_embed=wp:term&status=publish`
  );
  return posts[0] ?? null;
}

export async function getWPCategories(): Promise<WPCategory[]> {
  return wpFetch<WPCategory[]>('/categories?per_page=100');
}

export function stripHtml(html: string): string {
  return html.replace(/<[^>]*>/g, '').trim();
}

export function formatWPDate(iso: string): string {
  return new Date(iso).toLocaleDateString('en-US', {
    year: 'numeric',
    month: 'short',
  });
}

export function getCategoryNames(post: WPPost): string[] {
  return post._embedded?.['wp:term']?.[0]?.map((t) => t.name) ?? [];
}
